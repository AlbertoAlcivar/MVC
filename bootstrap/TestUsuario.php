<?php
require("header.php");
include ("Usuario.php");
include ("bd.php");

echo "<center>";
$usuario = new Usuario();
$usuario->Read();
if (isset($_POST['submit']))
{
    switch ($_POST['submit'])
    {
        case "Alta":
            echo "<br>Botón: " . $_POST['submit'];
            $usuario->Create("$_POST[nombre]","$_POST[correo]",$_POST['nivel'],$_POST['activo']);
            $usuario->Read();
            break;
        case "Actualiza":
            echo "<br>Botón: " . $_POST['submit'];
            $usuario->Update($_POST['actualiza'],"$_POST[nombre]","$_POST[correo]",$_POST['nivel'],$_POST['activo']);
            $usuario->Read();
            break;
        case "Elimina":
            echo "<br>Botón: " . $_POST['submit'];
            $usuario->Delete($_POST['elimina']);
            $usuario->Read();
            break;
        case "Buscar":
            echo "<br>Botón: " . $_POST['submit'];
            $usuario->Read_esp($_POST['buscar']);
            break;
    }
}

echo "
    <center><div>
        <form name=alumno action=TestUsuario.php method=POST>
            <table>
                <tr><td>Nombre(s):</td><td><input type=text name=nombre></td></tr>
                <tr><td>Correo:</td><td><input type=text name=correo></td></tr>
                <tr><td>Nivel:</td><td><select name=nivel>
                    <option value=1>Admin</option>
                    <option value=2>Maestro</option>
                    <option value=3>Alumno</option>
                    </td></tr>
                <tr><td>Activo:</td><td><select name=activo>
                    <option value=1>Activo</option>
                    <option value=2>No activo</option>
                    </td></tr>
                <tr><td colspan=2> <input type=submit name=submit value=Alta> </td></tr>
                <tr><td> <input type=text name=actualiza></td><td> <input type=submit name=submit value=Actualiza> </td></tr>
                <tr><td> <input type=text name=elimina></td><td>  <input type=submit name=submit value=Elimina> </td></tr>
                <tr><td> <input type=text name=buscar></td><td>  <input type=submit name=submit value=Buscar> </td></tr>
                </table>
        </form>

    </div></center>
";

echo "</center><br>";
require("footer.php");
?>
