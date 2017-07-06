<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php

//Recibe los datos del formulario via POST
$rutPacientePost = $_POST['rut'];



//Agregar los datos recibidos a una clase
$oPaciente = new Paciente();
$oPaciente->rut=$rutPacientePost;



//Despide al medico y lo elimina de la base de datos
if($oPaciente->EliminarPaciente()){
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
                <h4>Paciente - Eliminar</h4>
                Paciente Eliminado!
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
                <h4>Paciente - Eliminado</h4>
                Paciente Eliminado!
                <a href="../../../formularios/administrador/Paciente/eliminarPaciente.php">Volver a intentar</a><br>
                <a href="../../../index.php">Volver a Home</a>

        </div> 

        </form>
    </body>
</html>
<?php
}


