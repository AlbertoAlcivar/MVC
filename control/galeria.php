<?php
$titulo	= 'Galeria';
$cont = 'Fotos... fotos...';

$variables = array('titulo'=>$titulo,'cont'=>$cont);

view($_GET['url'],$variables);