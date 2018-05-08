<?php
//conexion local
/*$servername = "sql207.byethost7.com";
$username = "b7_16313551";
$password = "llanetes25";
$dbname = "b7_16313551_bebidas";*/


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eg-dashboard";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
}
else
{
	//echo "Conexion establecida";
}


?>
