<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php

//Recibe los datos del formulario via POST
$nombreMedico = $_POST['nombreMedico'];
$rutMedico = $_POST['rutMedico'];
$idEspecialidad = $_POST['idEspecialidad'];
$fechaContratacion = $_POST['fechaContratacion'];
$valorConsulta = $_POST['valorConsulta'];

//Agregar los datos recibidos a una clase
$oMedico = new Medico();
$oMedico->rut=$rutMedico;
$oMedico->nombreMedico=$nombreMedico;
$oMedico->especialidad=$idEspecialidad;
$oMedico->fechaContratacion=$fechaContratacion;
$oMedico->valorConsulta=$valorConsulta;

//Agrega el usuario a la base de datos
if($oMedico->AgregarMedico()){
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
                <h4>Medico - Contratar</h4>
                Medico Contratado!
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
                <h4>Medico - Contratar</h4>
                Medico no Contratado!
                <a href="../../../formularios/administrador/Medico/resgistarMedico.php">Volver a intentar</a><br>
                <a href="../../../index.php">Volver a Home</a>

        </div> 

        </form>
    </body>
</html>
<?php
}


