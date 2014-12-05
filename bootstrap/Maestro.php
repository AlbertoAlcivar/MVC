<?php
require ("Usuario.php");
class Maestro extends Usuario{
private $Materia;
    public function Combo()
    {
    echo "Maestro: <select name=maestro>";
            $consMaestro = "SELECT * FROM usuario where nivel = 2";
            $consulta = mysql_query($consMaestro) or die ("Error consulta Maestro");
            $cuantos = mysql_num_rows($consulta);
        echo "hola";
        for ($y=0;$y<$cuantos;$y++)
            {
                $idu = mysql_result($consulta,0,'idu');
                $nombre = $field['nombre'];
                echo "<option value='$idu'>$nombre</option>";
            }
    }
}