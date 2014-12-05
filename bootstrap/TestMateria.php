<?php
require("header.php");
require ("Materia.php");
require ("Maestro.php");
require ("bd.php");
?>
    <div class="container marketing">
        <div class="row">
            <div class="col-lg-12">
<?php
echo "<center>";
$materia = new Materia();
@$idu = $_REQUEST['idu_maestro'];
@$accion = $_REQUEST['accion'];
@$materias = $_REQUEST['id_materia'];
if ($accion == "") $accion = 0;
switch($accion){
    case 0:
        $materia->SeleccionaMaestro();
        break;
    case 1:
        $materia ->EliminaMateria($idu,$materias);
        $materia->SeleccionaMaestro();
        break;
    case 2:
        $materia -> AgregaMateria($idu,$materias);
        $materia->SeleccionaMaestro();
        break;
}
?>
</div></div></div>