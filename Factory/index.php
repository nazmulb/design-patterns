<?php
	require_once "Country.php";
	
	$country = isset($_GET['country']) ? $_GET['country'] : "BD";
	
	$c = Country::create($country);
	echo $c->getPhoneCode()."<br/>";
	echo $c->getCountryCode()."<br/>";
	echo $c->getCountryName()."<br/>";
	echo (method_exists($c, "show") ? $c->show() : "") ."<br/>";
?>