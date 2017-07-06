<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php

//Recibe los datos del formulario via POST
$idPerfil = $_POST['idPerfil'];
$nombreUsario = $_POST['nombreUsuario'];
$contrasennaUsuario = $_POST['contrasennaUsuario'];


//Agregar los datos recibidos a una clase
$oUsuario = new Usuario();
$oUsuario->nombreUsuario=$nombreUsario;
$oUsuario->contrasenna=$contrasennaUsuario;
$oUsuario->idPerfil=$idPerfil;

//Agrega el usuario a la base de datos
if($oUsuario->AgregarUsuario()){
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Administrador Hospital Comunal</title>
    </head>
    <body>
        
        <div id="Cabecera">
        </div>  
        <div id="Cuerpo">
                <h4>Usuarios - Agregar</h4>
                Usuario Agregado!
                <a href="../../../index.php">Volver a Home</a>

        </div> 

        </form>
    </body>
</html>

<?php
}
else
{
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Administrador Hospital Comunal</title>
    </head>
    <body>
        
        <div id="Cabecera">
        </div>  
        <div id="Cuerpo">
                <h4>Usuarios - Agregar</h4>
                Usuario no Agregado!
                <a href="../../../formularios/administrador/Usuario/resgistarUsuario.php">Volver a intentar</a><br>
                <a href="../../../index.php">Volver a Home</a>

        </div> 

        </form>
    </body>
</html>
<?php
}

