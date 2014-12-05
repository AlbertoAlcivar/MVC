<?php
require ("Maestro.php");
require ("bd.php");
$maestro = new Maestro();

$maestro ->Create();
$maestro ->Delete();
$maestro->Read_esp();
$maestro->Read();
$maestro->Update();

?>