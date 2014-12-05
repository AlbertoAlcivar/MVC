<?php
$name="example73";
$server="localhost";
$user = "root";
$pass = "";
$conexion = mysql_connect($server,$user,$pass) or die ("no conexion");
mysql_select_db($name,$conexion);
mysql_query ("SET NAMES utf8");
?>