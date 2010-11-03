<?php
/* Renvoie l'IP de l'image miniature de J-$retard
/  Spécifier le second argument $grande différent de "" pour avoir l'IP de la grande soeur */
function getIP($retard, $grande="")
{
	if ($grande!="") 
		$grande = "_g";
	$dateX =  time()-($retard*86400);
	$url = "http://www.mon-ip.biz/pinip/".date('d', $dateX)."_".date('m', $dateX).$grande.".jpg";
	return $url;
}
?>