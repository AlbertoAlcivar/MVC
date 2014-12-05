<?php
class Usuario {
public $idu="";
public $nombre="";
private $ap_paterno="";
private $ap_materno ="";
private $telefono ="";
private $calle ="";
private $no_ext ="";
private $no_int ="";
private $colonia ="";
private $municipio ="";
private $estado ="";
private $cp ="";
private $correo ="";
private $usuario ="";
private $contraseña ="";
private $nivel ="";
private $status ="";
public function Create($nombre1,$correo1,$nivel1,$status1){
    $insert1 = "INSERT INTO usuario (nombre,correo,nivel,activo) values ('".$nombre1."','".$correo1."',".$nivel1.",".$status1.")";
    $execute = mysql_query($insert1) or die ("Error insert");
}
public function Read_esp($id){
    $sql = ("SELECT * FROM usuario where activo = '1' and idu=".$id.";");
    $consulta = mysql_query ($sql) or die ("no hubo consulta");
    echo "<div class=table-responsive>";
    echo "<table class=\"table table-striped\">";
    echo "<tr><td colspan=4><strong><center>Lista de Usuarios</center></strong></td></tr>";
    echo "<tr><th>Identificador</th><th>Nombre completo</th><th>Correo Electrónico</th><th>Nivel</th></tr>";
    while ($field = mysql_fetch_array($consulta))
    {
        $this->idu=$field['idu'];
        $this->nombre=$field['nombre'];
        $this->correo=$field['correo'];
        $this->nivel=$field['nivel'];
        switch ($this->nivel){
            case 1:
                $nivel = "Administrador";
                break;
            case 2:
                $nivel = "Maestro";
                break;
            case 3:
                $nivel = "Usuario";
                break;
            default:
                $nivel = "Unknow";
                break;
        }
        echo "<br>";

        echo "<tr><td>$this->idu</td><td>$this->nombre</td><td>$this->correo</td><td>$nivel</td></tr>";
    }
    echo "</table></div>";
}
public function Read(){
    $sql = "SELECT * FROM usuario where activo = '1'";
    $consulta = mysql_query ($sql) or die ("no hubo consulta");
    echo "<div class=table-responsive><table class=\"table table-striped\">";
    echo "<tr><td colspan=4><strong><center>Lista de Usuarios</center></strong></td></tr>";
    echo "<tr><th>Identificador</th><th>Nombre completo</th><th>Correo Electrónico</th><th>Nivel</th></tr>";
    while ($field = mysql_fetch_array($consulta))
    {
        $this->idu=$field['idu'];
        $this->nombre=$field['nombre'];
        $this->correo=$field['correo'];
        $this->nivel=$field['nivel'];
        switch ($this->nivel){
            case 1:
                $nivel = "Administrador";
                break;
            case 2:
                $nivel = "Maestro";
                break;
            case 3:
                $nivel = "Alumno";
                break;
            default:
                $nivel = "Unknow";
                break;
        }

        echo "<tr><td><center>$this->idu</center></td><td>$this->nombre</td><td>$this->correo</td><td>$nivel</td></tr>";
    }
    echo "</table></div>";
}
public function Update($idu,$nombre1,$correo1,$nivel1,$status1){

    $update1 = "UPDATE usuario SET nombre='".$nombre1."', correo='".$correo1."', nivel=".$nivel1.", activo=".$status1." WHERE idu=".$idu.";";
    $execute = mysql_query($update1) or die ("Error update");

}
public function Delete($idu){

    $delete1 = "DELETE FROM usuario WHERE idu=".$idu.";";
    $execute = mysql_query($delete1) or die ("Error delete");
}
}
?>