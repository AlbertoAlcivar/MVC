<?php
function view ($plantilla, $variables = array()){
	extract ($variables);
	require ('views/'.$plantilla.'.tpl.php');
}

function controller ($nombre){
	if (empty($nombre))
		$nombre = 'home';
	$archivo = 'control/'.$nombre.'.php';
	if (file_exists($archivo))
		require ($archivo);
	else
		echo "Error archivo no encontrad";
}