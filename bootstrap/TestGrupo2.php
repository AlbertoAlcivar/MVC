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
            require ("Grupo.php");
            $grupo = new Grupo();
            $base=new DB_mysql();
            $base->conectar("$BD", "$HOST", "$USER", "$PASS") or die ("Error en la conex");
            @$idg_grupo = $_POST['idg_grupo'];
            $base->consulta("SELECT * FROM grupo WHERE idg = $idg_grupo") or die ("Error en consulta");
            $nombre_grupo = mysql_result($base->Consulta_ID,0,'Nombre');
            echo "<div class=table-responsive>";
            echo "<form action=TestGrupo.php method=Post name=grupo id=grupo target='_self'>";

            echo "<table class=\"table table-striped\">";
            echo "<tr><td colspan=2><strong><center>Asignar alumnos al grupo: $nombre_grupo</center></strong></td><td colspan=2><strong><center>Lista de alumnos del grupo: $nombre_grupo</center></strong></td></tr>";
            echo "<tr><th colspan=2><center>Nombre:</center></th><th colspan=2><center>Nombre:  //   Eliminar</center></th></tr>";
            echo "<tr><td colspan=2><center>";
            $base->consulta ("SELECT * from usuario WHERE nivel = 3 and activo = 1 and idu NOT IN (SELECT idu FROM grupoalumno)");
            $num_al = 0;
            while ($field = mysql_fetch_array($base->Consulta_ID))
            {
                $idu_alumno=$field['idu'];
                $nombre_alumno=$field['idu'].") ".$field['ap_paterno']." ".$field['ap_materno']." ".$field['nombre'];
                echo "<input type=checkbox name=alumno$num_al value=$idu_alumno>$nombre_alumno <br>";
                $num_al = $num_al + 1;
            }
            echo "</center></td><td colspan=2><center>";
            $base->consulta ("SELECT * from usuario WHERE nivel = 3 and activo = 1 and idu IN (SELECT idu FROM grupoalumno where idg=$idg_grupo)");
            while ($field = mysql_fetch_array($base->Consulta_ID))
            {
                $idu_alumno=$field['idu'];
                $nombre_alumno=$field['idu'].") ".$field['ap_paterno']." ".$field['ap_materno']." ".$field['nombre'];
                echo "$nombre_alumno <a href=TestGrupo.php?accion=1&idg=$idg_grupo&idu=$idu_alumno><input type=button value=Eliminar></a><br>";
            }
            echo "</center></td></tr>
            <tr><td colspan=2><center><input type=hidden name=\"num_al\" value=$num_al><input type=hidden name=\"idg\" value=$idg_grupo><input type=hidden name=\"accion\" value=2><input type=submit value=Agregar></center></td><td colspan=2></td></tr>
            </table></form>";
            ?>
        </div></div></div>