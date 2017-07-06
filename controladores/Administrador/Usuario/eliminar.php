<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php

//Recibe los datos del formulario via POST
$idUsuarioPost = $_POST['idUsuario'];



//Agregar los datos recibidos a una clase
$oUsuario = new Usuario();
$oUsuario->idUsuario=$idUsuarioPost;



//Elimina el usuario de la base de datos
if($oUsuario->EliminarUsuario()){
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
                <h4>Usuarios - Eliminar</h4>
                Usuario Eliminado!
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
                <h4>Usuarios - Eliminados</h4>
                Usuario no Eliminado!
                <a href="../../../formularios/administrador/Usuario/EliminarUsuario.php">Volver a intentar</a><br>
                <a href="../../../index.php">Volver a Home</a>

        </div> 

        </form>
    </body>
</html>
<?php
}

