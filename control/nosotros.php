<?php
$titulo	= 'Bienvenidos NOSOTROS';
$cont = 'We are the champions....';

$variables = array('titulo'=>$titulo,'cont'=>$cont);

view($_GET['url'],$variables);