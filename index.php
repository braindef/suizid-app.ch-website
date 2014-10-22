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
		<meta name="keywords" content="suizidhilfe, suizidprävention, suizid, selbstmord, ignoriert, allein, alleine, allein gelassen" />
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
</script>


	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Hilfe bekommen</a></li>
					<li><a href="#work">Mithelfen</a></li>
					<li><a href="#portfolio">Andere Organisationen</a></li>
					<li><a href="#contact">Kontakt</a></li>
					<li><a href="./sha.apk">Android APP</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="image fit"><img src="images/pic00.jpg" alt="" /></span>
						</div>
						<div class="8u">
							<header>
								<h1><strong>Hallo...</strong></h1>
							</header>
							<p>herzlich willkommen auf unserer <strong>Suizidpr&auml;ventions Seite</strong> eine Gratis Dienstleistung von Menschen die selber solche Erfahrungen gemacht haben oder einfach nur helfen wollen.</a></p>
									<p style="color: blue;font-size: 1em;">um zu verbinden bitte die beiden Zahlen addieren und connect dr&uuml;cken</p>



<?php
$number1 = rand(1,9);
$number2 = rand(1,9);
$sum = $number1 + $number2;
?>
							<header>
								<div class="row">

									




									<form action="./help.php" id="logincaptcha" method="post">
   									<ul class="social">
<li style="height: 2em;line-height: 2em;" ><h1><?php echo $number1.' + '.$number2.' = '; ?></h1></li>
<li style="height: 2em;line-height: 2em;"><input type="text" name="captcha" /></li><li style="height: 2em;line-height: 2em;"><h1>&rArr;</h1></li>
										<li style="height: 2em;line-height: 2em;"><input type='submit' id="connect" value="connect"/></li> </ul>
										<input type="hidden" name="correctsum" value="<?php echo $sum; ?>"/>
									</form>
									
									
								</div>
							</header>


						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h2>Mithelfen</h2>
						<p>Ziel ist es, dass sich die Community gegenseitig helfen kann.<br> Suizid ist immer noch ein Tabuthema und oft ist man in der Kriese alleine. <br> Bist Du z.B. PsychologiestudentIn oder begabte(r) InformatikerIn oder hast Du selber schon Krisen gehabt und diese nun &uuml;berwunden und so allenfalls die Voraussetzungen um zu helfen?</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-plus-square"></span>
									<h3>Supporter werden</h3>
									<p>falls Du Dich angesprochen fühlst melde Dich als Supporter an, dabei bekommst Du eine App für Dein Handy, welche Dich im Notfall aber auch aus dem Bett holt</p>
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-cog"></span>
									<h3>Technik helfen</h3>
									<p>Auch die Infrastruktur muss gepflegt werden und allenfalls gibt es auch mal einen Pikett Einsatz, wenn z.B. der Server nicht Funktioniert (Vorerst Schweiz)</p>
								</section>
							</div>
							<div class="4u">
								<section class="box style1">
									<span class="icon featured fa-usd"></span>
									<h3>Finanziell mithelfen</h3>
									<p>Da viele Freiwillige mithelfen fallen wenig Kosten an, da aber in der heutigen Zeit Serverinfrastruktur nicht gratis ist sind Spenden herzlich willkommen</p>
								</section>
							</div>
						</div>
					</div>
					<footer>
						<p>Allen die schon tatkräftig mithelfen an diesem Punkt ein herzliches Dankesch&ouml;n</p>
						<a href="#portfolio" class="button big scrolly">Forum</a>
					</footer>
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper style3">
				<article id="portfolio">
					<header>
						<h2>Andere Anlaufstellen</h2>
						<p>Hier sind einige Seiten welche sich auch dem Kampf gegen den Suizid verschrieben haben</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u">
								<article class="box style2">
									<a href="http://www.ipsilon.ch/" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<h3><a href="http://www.ipsilon.ch/">ipsilon.ch</a></h3>
									<p>Die nationale Dachorganisation IPSILON die sich in ihrer Arbeit täglich mit Suizid konfrontiert sehen.</p>
								</article>
							</div>
							<div class="4u">
								<article class="box style2">
									<a href="http://www.u25-ostschweiz.ch/" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
									<h3><a href="http://www.u25-ostschweiz.ch/">[U25] Ostschweiz </a></h3>
									<p>Ein Team von jungen, ehrenamtlichen Berater und Beraterinnen. Schreibe anonym und kostenlos.</p>
								</article>
							</div>

							<div class="4u">
								<article class="box style2">
									<a href="http://www.suizidpraevention.ch/" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<h3><a href="http://www.suizidpraevention.ch/">suizid-prävention.ch</a></h3>
									<p>Projekte zur Enttabuisierung von Jugendsuizid zwischen Jugendlichen selbst und in der Gesellschaft.</p>
								</article>
							</div>
						</div>
						
					</div>
					<footer>
						<p>?</p>
						<a href="#contact" class="button big scrolly">Get in touch with us</a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
						<h2>Frage, Anregungen, Kritik...</h2>
						<p>...sind natürlich herzlich willkommen.</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="#">
									<div>
										<div class="row">
											<div class="6u">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row double">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Clear Form" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<hr />
								<h3>Find me on ...</h3>
								<ul class="social">
									<!--
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
									<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
									-->
									<li><a href="https://github.com/braindef/SuicidePreventionApp" class="icon fa-github"><span class="label">Github</span></a></li>
									<!--
									<li><a href="#" class="icon fa-rss"><span>RSS</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span>Instagram</span></a></li>
									<li><a href="#" class="icon fa-foursquare"><span>Foursquare</span></a></li>
									<li><a href="#" class="icon fa-skype"><span>Skype</span></a></li>
									<li><a href="#" class="icon fa-soundcloud"><span>Soundcloud</span></a></li>
									<li><a href="#" class="icon fa-youtube"><span>YouTube</span></a></li>
									<li><a href="#" class="icon fa-blogger"><span>Blogger</span></a></li>
									<li><a href="#" class="icon fa-flickr"><span>Flickr</span></a></li>
									<li><a href="#" class="icon fa-vimeo"><span>Vimeo</span></a></li>
									-->
								</ul>
								<hr />
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
				</article>
			</div>

	</body>
</html>
