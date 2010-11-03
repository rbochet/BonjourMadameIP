<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Bonjour Madame IP !</title>
	</head>
	<body>
		<h1>Bonjour Madame IP</h1>
		<?php
			include 'fonctions.php';
			echo "<img border=0 src='".getIP(0,'grande')."'> <br />";
			echo "<a href='".getIP(1,'grande')."'><img border=0 src='".getIP(1)."'></a> Madame IP d'hier  <br />";
			echo "<a href='".getIP(-1,'grande')."'><img border=0 src='".getIP(-1)."'></a> Madame IP de demain en exclu ! <br />";
		?>
	<p>Sponsorisé par <a href='http://www.mon-ip.biz/'>www.mon-ip.biz</a></p>
	</body>
</html> 