<?php
class Materia {
    private $id="";
    private $Nombre="";
    private $Avatar="";
    private $Orden="";
    private $Estatus="";
    public function Create(){
        echo "<br>Método para crear materias";
    }
    public function Read_esp(){
        echo "<br>Método para lectura específica de materias";
    }
    public function Read(){
        echo "<br>Método para lectura de materias";
    }
    public function Update(){
        echo "<br>Método para actualizar materias";
    }
    public function Delete(){
        echo "<br>Método para eliminar materias";
    }
    public function AsignarMaterias(){
        echo "<br>Método para asignar materias";
    }
    public function AsignarGrupos(){
        echo "<br>Método para asignar grupos";
    }
    public function SeleccionaMaestro(){
        echo "<div class=table-responsive>";
        echo "<form action=TestMateria2.php method=Post name=maestro id=maestro target='_self'>";


        echo "Selecciona maestro: <br> <select name='idu_maestro'> ";
        $sql = "SELECT * FROM usuario WHERE activo = 1 AND nivel = 2";
        $consulta = mysql_query($sql)or die("Error $sql");
        while($field = mysql_fetch_array($consulta)){
            $id_maestro = $field['idu'];
            $opcion = $field['idu'].": ".$field['ap_paterno']." ".$field['ap_materno']." ".$field['nombre'];
            echo "<option value=$id_maestro>$opcion</option>";
        }
        echo "</select>";

        echo "<br><input type=submit id=submit value=Selecciona>";
        echo "</form>";
        echo "</div>";
    }
    public function EliminaMateria($maestro,$materia){
        $sql = "DELETE FROM maestromateria WHERE idu=$maestro AND idm=$materia";
        $consulta = mysql_query($sql) or die ("No se pudo Eliminar");
    }
    public function AgregaMateria($maestro,$materia){
        $sql = "INSERT INTO maestromateria (idmm,idu,idm) VALUES ('',$maestro,$materia)";
        $consulta = mysql_query($sql) or die ("No se pudo Agregar");
    }
}