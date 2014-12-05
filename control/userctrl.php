<?php
/**
 * Created by PhpStorm.
 * User: AlbertoAlc
 * Date: 17/10/14
 * Time: 06:23 PM
 */
$usuario = new Usuario();

$titulo	= 'Usuario Ctrl';
$cont = 'Esta es la página que Usuario';
$variables = array('titulo'=>$titulo,'cont'=>$cont,'nombre'=>$usuario->setUsuario());

view('userctrl',$variables);