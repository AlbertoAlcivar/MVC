<?php
$user=$_POST['user'];
$psw=$_POST['psw'];
if ($user == "" or $psw == "")
{
    $msg="";
    print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
}
include_once("BaseDatos/config.php");
include_once("BaseDatos/mysql.php");
$base = new DB_mysql();
$base->conectar("$BD", "$HOST", "$USER", "$PASS") or die ("Error en la conex");
$base ->consulta("SELECT * FROM usuario WHERE usuario=\"$user\" AND pass=$psw") or die ("error en consulta");
$idu = mysql_result($base->Consulta_ID,0,'idu');
$a=mysql_result($base->Consulta_ID,0,'activo');

if ($a == 1)
{
    print"<meta http-equiv='refresh' content='0;
    url=identi.php?idu=$idu'>";
}
else
{
    $msg="Usuario no activo, favor de contactar ";
    print"<meta http-equiv='refresh' content='0;
    url=index.php?msg=$msg'>";
}

