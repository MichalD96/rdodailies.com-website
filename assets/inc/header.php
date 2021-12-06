<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<?php 
error_reporting(0);
date_default_timezone_set("Europe/London");

$version = $nocache = "6.0.7";

$nocache2 = date('d.h.s');

$bootstrap = "4.6.0";

$jquery = "3.6.0";

$leaflet = "1.6.0"; 

$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
$path = $_SERVER['DOCUMENT_ROOT'];

$date = date('y-m-d');
$dateDay = date('d');
$dateMonth = date('m');
$dateYear = date('Y');

?>
