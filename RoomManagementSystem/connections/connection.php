<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rms";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>