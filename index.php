<!DOCTYPE html>
<html lang="en">
<?php
require("template/header.php");
require("clases/Usuario.php");

?>
<body>
<div class="container">
<?php
require 'helpers.php';
if (empty ($_GET['url']))
	$_GET['url'] = 'home';
controller ($_GET['url']);
require 'template/footer.php';
?></div>