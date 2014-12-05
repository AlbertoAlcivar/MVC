<?php
require("header.php");
require ("Usuario.php");
require ("bd.php");
?>
    <div class="container marketing">
        <div class="row">
            <div class="col-lg-12">
<?php
include_once("BaseDatos/config.php");
include_once("BaseDatos/mysql.php");
require ("Materia.php");
$materia = new Materia();
$base=new DB_mysql();
$base->conectar("$BD", "$HOST", "$USER", "$PASS") or die ("Error en la conex");
@$idu_maestro = $_POST['idu_maestro'];
$base -> consulta("SELECT * FROM usuario WHERE idu = $idu_maestro") or die ("Error en consulta");
$nombre_maestro = mysql_result($base->Consulta_ID,0,'ap_paterno')." ".mysql_result($base->Consulta_ID,0,'ap_materno')." ".mysql_result($base->Consulta_ID,0,'nombre');
echo "<div class=table-responsive>";
echo "<form action=TestMateria.php method=Post name=maestro id=maestro target='_self'>";
echo "<table class=\"table table-striped\">";
echo "<tr><td colspan=4><strong><center>Lista de materias impartidas por: $nombre_maestro </center></strong></td></tr>";
echo "<tr><th colspan=2><center>Materia</center></th><th colspan=2><center>Eliminar</center></th></tr>";
$base->consulta ("SELECT * from maestromateria where idu = $idu_maestro");
$base2 = new DB_mysql;
$base2->conectar("$BD", "$HOST", "$USER", "$PASS") or die ("Error en la conex");
while ($field = mysql_fetch_array($base->Consulta_ID))
{
    $id_materia1=$field['idm'];
    $base2 -> consulta("SELECT * FROM materia WHERE idm=$id_materia1");
    while ($field = mysql_fetch_array($base2->Consulta_ID))
    {
        $id_materia2 = $field['idm'];
        $nombre_materia = $field['Nombre'];
        echo "<tr><td colspan = 2><center>$nombre_materia</center></td><td colspan=2><center><a href=\"TestMateria.php?accion=1&idu_maestro=$idu_maestro&id_materia=$id_materia2\"> <input type=button value=Eliminar></a></center></td></tr>";
    }
}
echo "</table><br><center>";
echo "Materias: <select name=id_materia>";
$base->consulta ("SELECT * FROM materia WHERE idm NOT IN (SELECT idm from maestromateria where idu = $idu_maestro)");
while ($field = mysql_fetch_array($base->Consulta_ID))
{
    $id_materia3=$field['idm'];
    $nombre_materia_sn = $field['Nombre'];
    echo "<option value = $id_materia3> $nombre_materia_sn </option>";
}
echo "</select>";
echo "</center><br><input type=hidden name=\"idu_maestro\" value=$idu_maestro><input type=hidden name=\"accion\" value=2><center><input type = submit value = Agregar></center></form>";
?>
</div></div></div>