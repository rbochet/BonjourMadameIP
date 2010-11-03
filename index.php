<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
include('fonctions.php');
?>

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="index,follow" name="robots" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="pics/homescreen.gif" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Bonjour Madame IP</title>
<meta content="madame ip, sexy, pinup, daily" name="Keywords" />
<link href="pics/startup.png" rel="apple-touch-startup-image" />
</head>

<body>

<div id="topbar">
	<div id="title">Bonjour Madame IP</div>

</div>
<div id="tributton">
	<div class="links">
		<a id="pressed" href="#">Home</a><a href="about.html">About</a><a href="http://mon-ip.biz/">Source</a></div>
</div>
<div id="content">
	<span class="graytitle">Pinup of the day</span>

	<ul class="pageitem">
		<li class="store"><a href="pinup.php?jour=0"><span class="image" style="background-size: cover; background-image: url('<?=getIP(0);?>')"></span>
		<span class="name">Pin-up du jour</span><span class="arrow"></span></a></li>
	</ul>
	<span class="graytitle">Good old friends</span>

	<ul class="pageitem">
		<li class="store"><a href="pinup.php?jour=1"><span class="image" style="background-size: cover; background-image: url('<?=getIP(1);?>')"></span>
		<span class="name">Hier ...</span><span class="arrow"></span></a></li>
		<li class="store"><a href="pinup.php?jour=2"><span class="image" style="background-size: cover; background-image: url('<?=getIP(2);?>')"></span>
		<span class="name">Avant hier ...</span><span class="arrow"></span></a></li>
		<li class="store"><a href="pinup.php?jour=3"><span class="image" style="background-size: cover; background-image: url('<?=getIP(3);?>'	)"></span>
		<span class="name">Avant avant hier ...</span><span class="arrow"></span></a></li>
		<li class="store"><a href="pinup.php?jour=4"><span class="image" style="background-size: cover; background-image: url('<?=getIP(4);?>')"></span>
		<span class="name">Encore avant qu'avant hier ...</span><span class="arrow"></span></a></li>
		<li class="store"><a href="pinup.php?jour=5"><span class="image" style="background-size: cover; background-image: url('<?=getIP(5);?>')"></span>
		<span class="name">Une dernière pour la fin</span><span class="arrow"></span></a></li>
	</ul>
</div>
<div id="footer">
	<a href="http://iwebkit.net">Powered by iWebKit and two g33ks</a></div>

</body>

</html>
