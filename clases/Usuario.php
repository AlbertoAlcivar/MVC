<?php
/**
 * Created by PhpStorm.
 * User: AlbertoAlc
 * Date: 17/10/14
 * Time: 06:15 PM
 */


 class Usuario
 {

     private $name;

     public function getUsuario()
     {
        echo "<br>Mostrar Usuario: ".$this->name;
     }

     public function setUsuario()
     {
        $this->name = "Alberto";
        return $this->name;
     }

     public function Read(){



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

 }