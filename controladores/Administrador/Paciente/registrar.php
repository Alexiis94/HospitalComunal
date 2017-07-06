<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php

//Recibe los datos del formulario via POST
$nombrePaciente = $_POST['nombrePaciente'];
$rutPaciente = $_POST['rutPaciente'];
$sexo = $_POST['sexo'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$idUsuario = $_POST['idUsuario'];

//Agregar los datos recibidos a una clase
$oPaciente = new Paciente();
$oPaciente->rut=$rutPaciente;
$oPaciente->nombrePaciente=$nombrePaciente;
$oPaciente->sexo=$sexo;
$oPaciente->fechaNacimiento=$fechaNacimiento;
$oPaciente->direccion=$direccion;
$oPaciente->telefono=$telefono;
$oPaciente->idPerfil=4;
$oPaciente->idUsuario=$idUsuario;

//Agrega el usuario a la base de datos
if($oPaciente->AgregarPaciente()){
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
                <h4>Paciente - Agregar</h4>
                Paciente Agregado!
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
                <h4>Paciente no agregado</h4>
                Paciente no Agregado!
                <a href="../../../formularios/administrador/Paciente/registrarPaciente.php">Volver a intentar</a><br>
                <a href="../../../index.php">Volver a Home</a>

        </div> 

        </form>
    </body>
</html>
<?php
}


