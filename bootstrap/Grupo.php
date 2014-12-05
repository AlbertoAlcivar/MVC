<?php
class Grupo {
    private $id="";
    private $Nombre="";
    private $Avatar="";
    private $Orden="";
    private $Estatus="";

    public function Create(){
        echo "<br>Método para crear grupos";
    }
    public function Read_esp(){
        echo "<br>Método para lectura específica de grupos";
    }
    public function Read(){
        echo "<br>Método para lectura de grupos";
    }
    public function Update(){
        echo "<br>Método para actualizar grupos";
    }
    public function Delete(){
        echo "<br>Método para eliminar grupos";
    }
    public function AsignarMaterias(){
        echo "<br>Método para asignar materias";
    }
    public function AsignarGrupos(){
        echo "<br>Método para asignar grupos";
    }
    public function SeleccionaGrupo(){
        echo "<div class=table-responsive>";
        echo "<form action=TestGrupo2.php method=Post name=grupo id=grupo target='_self'>";


        echo "Selecciona grupo: <br> <select name='idg_grupo'> ";
        $sql = "SELECT * FROM grupo";
        $resultado= mysql_query($sql)or die("Error $sql");
        while($field = mysql_fetch_array($resultado)){
            $id_grupo = $field['idg'];
            $nom_grupo = $field['idg'].": ".$field['Nombre'];
            echo "<option value=$id_grupo>$nom_grupo</option>";
        }
        echo "</select>";

        echo "<br><input type=submit id=submit value=Selecciona>";
        echo "</form>";
        echo "</div>";
    }
    public function EliminaAlumno($alumno,$grupo){
        $sql = "DELETE FROM grupoalumno WHERE idu=$alumno AND idg=$grupo";
        $consulta = mysql_query($sql) or die ("No se pudo Eliminar: $alumno");
    }
    public function AgregaAlumno($grupo,$alumno){
        $sql = "INSERT INTO grupoalumno (idg_alumno,idg,idu) VALUES ('',$grupo,$alumno)";
        $consulta = mysql_query($sql) or die ("No se pudo Agregar");
    }
} 