<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php

//Recibe los datos del formulario via POST
$rutMedico = $_POST['rutMedico'];
$rutPaciente = $_POST['rutPaciente'];
$fechaAtencion = $_POST['fechaAtencion'];

//Agregar los datos recibidos a una clase
$oConsulta = new Consulta();
$oConsulta->idEstado=1;
$oConsulta->fechaAtencion=$fechaAtencion;
$oConsulta->rutMedico=$rutMedico;
$oConsulta->rutPaciente=$rutPaciente;


//Agrega el usuario a la base de datos
if($oConsulta->AgregarConsulta()){
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
                <h4>Consulta - Agendar</h4>
                Consulta Agendada!
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
                <h4>Consulta - Agendar</h4>
                Consulta no Agendada!
                <a href="../../../formularios/secretaria/atencion/agendarAtencion.php">Volver a intentar</a><br>
                <a href="../../../index.php">Volver a Home</a>

        </div> 

        </form>
    </body>
</html>
<?php
}


