var BOSH_SERVICE = 'http://ns3.ignored.ch:5280/http-bind';
var connection = null;
var supporter;

function log(msg) {
	$('#log').append('<div></div>').append(document.createTextNode(msg));
}

function chat(msg) {
	$('#chat').append('<div></div>').append(document.createTextNode(msg));
}

//Function that is called on status change
function onConnect(status) {
	if (status == Strophe.Status.CONNECTING) {
		log('Strophe is connecting.');
	} else if (status == Strophe.Status.CONNFAIL) {
		log('Strophe failed to connect.');
		$('#connect').get(0).value = 'connect';
	} else if (status == Strophe.Status.DISCONNECTING) {
		log('Strophe is disconnecting.');
	} else if (status == Strophe.Status.DISCONNECTED) {
		log('Strophe is disconnected.');
		$('#connect').get(0).value = 'connect';
	} else if (status == Strophe.Status.CONNECTED) {
		log('Strophe is connected.');
		log('ECHOBOT: Send a message to ' + connection.jid + ' to talk to me.');

		connection.addHandler(onMessage, null, 'message', null, null, null);
		connection.send($pres().tree());

		getSupporter();
	}
}

//Handler that handels incoming messages
function onMessage(msg) {
	var to = msg.getAttribute('to');
	var from = msg.getAttribute('from');
	var type = msg.getAttribute('type');
	var elems = msg.getElementsByTagName('body');

	if (type == "chat" && elems.length > 0) {
		var body = elems[0];

		// chat(from + ': ' + Strophe.getText(body));
		if (Strophe.getText(body).indexOf(
				'SuicidePreventionAppServerSupporterRequestCallingAccept') == 0) {
			supporter = Strophe.getText(body).split(";")[1];
		} else {
			chat(from.split("@")[0] + ": " + Strophe.getText(body));
		}

	}

	var objDiv = document.getElementById("chat");
	objDiv.scrollTop = objDiv.scrollHeight;

	if (Strophe.getText(body).indexOf('SuicidePreventionAppServerHelpSeekerEndSessionAck') == 0) {		
		connection.disconnect();
		window.location.replace('./index.php');
        }

	// we must return true to keep the handler alive.
	// returning false would remove it after it finishes.
	return true;
}

function sendMessage(message) {
	chat("me: " + message);

	var mesg = $msg({
		to : supporter,
		type : 'chat'
	}).cnode(Strophe.xmlElement('body', message));
	connection.send(mesg.tree());

	var objDiv = document.getElementById("chat");
	objDiv.scrollTop = objDiv.scrollHeight;

	document.getElementById("message").value = '';

}

//get supportername from sleek-xmpp server Bot
function getSupporter() {

	var message = 'SuicidePreventionAppServerSupporterRequest';
	chat("Versuche einen Supporter zu erreichen, bitte warten");

	var reply = $msg({
		to : 'server@ns3.ignored.ch',
		type : 'chat'
	}).cnode(Strophe.xmlElement('body', message));
	connection.send(reply.tree());
}

//get supportername from sleek-xmpp server Bot
function endChat(points) {

	var message = 'SuicidePreventionAppServerHelpSeekerEndSession;'+points+';'+supporter;
	chat("Beende Chat");

	var reply = $msg({
		to : 'server@ns3.ignored.ch',
		type : 'chat'
	}).cnode(Strophe.xmlElement('body', message));
	connection.send(reply.tree());

	var reply = $msg({
		to : supporter,
		type : 'chat'
	}).cnode(Strophe.xmlElement('body', 'connection closed'));
	connection.send(reply.tree());

	
}


$(document).ready(function() {
	connection = new Strophe.Connection(BOSH_SERVICE);

	// Uncomment the following lines to spy on the wire traffic.
	// connection.rawInput = function (data) { log('RECV: ' + data);
	// };
	// connection.rawOutput = function (data) { log('SEND: ' +
	// data); };

	// Uncomment the following line to see all the debug output.
	// Strophe.log = function (level, msg) { log('LOG: ' + msg); };

	/*$('#connect').bind('click', function() {
		var button = $('#connect').get(0);
		if (button.value == 'connect') {
			button.value = 'disconnect';

		connection.connect(user + "@" + server, pass, onConnect); //these values come from the php in the head/script part of this file

		} else {
			endChat();
			button.value = 'connect';

		}
	});*/

        if(user.length >2)
        {
          connection.connect(user + "@" + server, pass, onConnect);
          $("#logincaptcha").remove();

        }
	$('#send').bind('click', function() {
		var button = $('#send').get(0);
		sendMessage($('#message').get(0).value);
	});
	$('#logout').bind('click', function() {
		if(document.getElementById('gerettet').checked) {
		  endChat("rescued");
		}
		else if(document.getElementById('geholfen').checked) {
		  endChat("helped");
		}
		else if(document.getElementById('verschlimmert').checked) {
		  endChat("madeworse");
		}
        	
	});

	$('#message').keydown(function (e){
	    if(e.keyCode == 13){
	    	sendMessage($('#message').get(0).value);
	    }
	});

});

