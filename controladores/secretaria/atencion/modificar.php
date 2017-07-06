<?php
include("../../../constantes.php");
include("../../../librerias.php");
?>
<?php

//Recibe los datos del formulario via POST
$idAtencion = $_POST['idAtencion'];
$idEstado = $_POST['idEstado'];

//Agregar los datos recibidos a una clase
$oConsulta = new Consulta();
$oConsulta->idAtencion=$idAtencion;

//Trae los datos de la base de datos a la clase
$oConsultaDB=new Consulta();
$oConsultaDB = $oConsulta->TraerConsulta();

//Con la nueva Clase modifica el estado y la actualiza en la base de datos
$oConsultaDB->idEstado=$idEstado;

//Elimina Consulta de la base de datos
if($oConsultaDB->ModificarConsulta()){
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
                <h4>Consulta - Modificar</h4>
                Consulta Modificada!
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
                <h4>Consulta - Modificada</h4>
                Consulta no Modificada!
                <a href="../../../formularios/secretaria/atencion/eliminarAtencion.php">Volver a intentar</a><br>
                <a href="../../../index.php">Volver a Home</a>

        </div> 

        </form>
    </body>
</html>
<?php
}



