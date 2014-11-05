<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Suizidpräventions App / Chat</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="suizidhilfe, chat, hilfe, suizidprävention, suizid, selbstmord, ignoriert, allein, alleine, allein gelassen" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->

<!--strophe-js -->
  <script type='text/javascript'
	  src='http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js'></script>
  <script type='text/javascript'
	  src='./strophejs/strophe.js'></script>
  <script type='text/javascript'
	  src='chat.js'></script>
<?PHP
require 'config.inc.php';

//wenn zwei in der gelichen sekunde anmelden gibts probleme
$timeStamp = time();
$user = $timeStamp;	
$pass = $timeStamp;
$xmppServer = 'ns3.ignored.ch';


  $correctsum = $_POST['correctsum'];
  $captcha = $_POST['captcha'];

  $showConnectButton=true;

if($correctsum != $_POST['nocaptcha'])
  if($correctsum == $captcha)
  {
    $createCommand = 'sudo /var/www/createUser.sh ' . $user . ' ' . $xmppServer . ' ' . $pass;

    $output = shell_exec($createCommand);

    $serverString   = 'successfully';
    $pos = strpos($output, $serverString);

    if ($pos === false)
    {
      echo "ERROR";
      echo "Create User failed, probably to add this file to /etc/sudoers with NOPASS" . $output;
    }
    echo "
      <script type=\"text/javascript\">
      var user = \"".$user."\";
      var pass = \"".$pass."\";
      var server = \"".'ns3.ignored.ch'."\";
      </script> ";
     $showConnectButton=false;
  }
  else
  {
    echo "
      <script type=\"text/javascript\">
      alert(\"falsche Summe eingegeben\");
      </script>";
  }
?>


	</head>
	<body>

		<!-- Nav
			<nav id="nav">
				<ul class="container">
					
					<li>

 <li>
				</ul>
			</nav>

		 Home -->




			<div class="wrapper style2">
				<article class="container" id="top">
					<div class="row">
						<!-- <div class="4u">
							<span class="image fit"><img src="images/pic00.jpg" alt="" /></span>
						</div> -->
						<div class="12u">

							<div id="chat" style="border-radius: 15px;
										border-width:8px;
										border-style: solid;
										border-color:#335;
										background-color:#f6f6ff;
										overflow-y: scroll;
										padding:30px;
										color:#0000FF;
										height:60vh;">
								Hallo... Supporter wird gerufen...
							</div>
								      
							<div class="row" style="vertical-align:middle;">
<label style="width:20%;color=#0000FF;font-size:2.5em;height: 1.6em;line-height: 1.6em;" ><b>Message:</b></label>
<input type='text' id='message' style="width:60%;height:4.2em;color=#0000FF;" />
<input type='button' id=send value="senden" style="width:20%;height:4em;"/>
							</div>	<br>
<p style="color: red;font-size: 1em;">bitte nach dem Chat bewertung abgeben und mit dem Beenden Knopf beenden</p>

  <fieldset style="font-size:1em;font-weight:bold;margin:auto;">
    <input type="radio" id="gerettet" name="Punkte" value="gerettet"><label for="gerettet"><font color="green"> gerettet :))</font></label><br>
    <input type="radio" id="geholfen" name="Punkte" value="geholfen"><label for="geholfen"><font color="orange"> geholfen :)</font></label><br>
    <input type="radio" id="verschlimmert" name="Punkte" value="verschlimmert"><label for="verschlimmert"><font color="red"> verschlimmert :(</font></label><br>
    <input align="right" type='button' id="logout" value="beenden" style="font-size:1em;left=50%" >
  </fieldset> <?PHP echo $user;?>


    
								
						</div>
					</div>
				</article>
			</div>
<div id='log'></div>
	</body>
</html>
