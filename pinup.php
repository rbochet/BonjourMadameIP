<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php

include('fonctions.php');
$adresse = getGreatIP($_GET["jour"]);

?>
<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="index,follow" name="robots" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="pics/homescreen.gif" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Affichage de pinup</title>
<meta content="madame ip, sexy, pinup, daily" name="Keywords" />
<meta content="Bonjour Madame IP, mobile edition" name="description" />
</head>

<body class="applist">

<div id="topbar">
	<div id="leftnav">
		<a href="index.php"><img alt="home" src="images/home.png" /></a></div>
	<div id="title">
		Pin up !</div>
</div>
<div id="content">
<br /><br />

<a href="<?=$adresse;?>"><img width="320" src="<?=$adresse; ?>"></a>
</div>
<div id="footer">
	<a href="http://iwebkit.net">Powered by iWebKit</a></div>

</body>

</html>
