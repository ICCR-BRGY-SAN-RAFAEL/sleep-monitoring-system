<?php

$sname= "localhost";
$unmae= "id19557446_sleepmonitoringsystem";
$password = "H!kari16WEBHOSTING";

$db_name = "id19557446_sms";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}