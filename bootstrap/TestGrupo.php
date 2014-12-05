<?php
require("header.php");
require ("Grupo.php");
require ("bd.php");
?>
    <div class="container marketing">
        <div class="row">
            <div class="col-lg-12">
<?php
echo "<center>";
$grupo = new Grupo();
@$idu = $_REQUEST['idu'];
@$accion = $_REQUEST['accion'];
@$idg = $_REQUEST['idg'];
@$num_al = $_REQUEST['num_al'];
if ($accion == "") $accion = 0;
switch($accion){
    case 0:
        $grupo->SeleccionaGrupo();
        break;
    case 1:
        $grupo -> EliminaAlumno($idu,$idg);
        $grupo -> SeleccionaGrupo();
        break;
    case 2:
        for ($y=0;$y<$num_al;$y++)
        {
            @$idu = $_REQUEST['alumno'.$y];
            if ($idu != "")
            {
                $grupo->AgregaAlumno($idg,$idu);
            }
        }
        $grupo->SeleccionaGrupo();
        break;
}
?>
            </div></div></div>