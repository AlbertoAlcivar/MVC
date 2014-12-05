<?php
$idu=$_GET['idu'];
include_once("BaseDatos/config.php");
include_once("BaseDatos/mysql.php");
$base = new DB_mysql();
$base->conectar("$BD", "$HOST", "$USER", "$PASS") or die ("Error en la conex");
$base ->consulta("SELECT nivel FROM usuario WHERE idu=$idu") or die ("error en consulta");
$nvl= mysql_result($base->Consulta_ID,0,'nivel');
if ($idu=="")
{
    $msg="";
    Print"<meta http-equiv='refresh' content='0;
url=index.php?msg=$msg'>";
}
else
{
if ($idu == 2)
{
    setCookie('idu',$idu);
    setCookie('acceso',$nvl);
    Print"<meta http-equiv='refresh' content='0;
url=MaestroMat.php'>";
}
    else
    {
    setCookie('idu',$idu);
    setCookie('acceso',$nvl);
    Print"<meta http-equiv='refresh' content='0;
url=TestUsuario.php'>";
    }
}
