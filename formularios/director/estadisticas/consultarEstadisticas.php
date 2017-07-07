<?php
    include '../../../Constantes.php';
    include '../../../Librerias.php';
    if(isset($_SESSION['USRDirector'])) {
    //QUERY Consulta
    $sqlAtencion="SELECT rut,idPerfil,idUsuario,nombrePaciente,fechaNacimiento,sexo,Direccion,Telefono FROM paciente order by fechaNacimiento;";
    $miqueryAtencion=mysqli_query($con,$sqlAtencion);
    
    /*SELECT p.rut,p.idPerfil,p.idUsuario,p.nombrePaciente,p.fechaNacimiento,p.sexo,p.Direccion,p.Telefono,COUNT(c.idAtencion) FROM paciente p JOIN consulta c order by fechaNacimiento, sexo ;*/
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../../../css/estilos.css" rel="stylesheet" type="text/css"/>
        <title>Administracion Hospital Comunal</title>
    </head>
    <body>
        
        <div id="Cabecera">
        </div>
        <div align="right"><button><a id="cancelar" href="../../../index.php">Cancelar</a></button></div>
        <div id="Cuerpo">
            <div id="ListarUsuarios">
                <h1>Consultar Estadisticas</h1>
                <div>
                    <h3>Pacientes</h3>
                    <a href="Sexo.php">Pacientes - Sexo</a>
                    <a href="rangoEtario.php">Pacientes - Rango Etario</a>
                    <a href="atenciones.php">Pacientes - Atenciones Recibidas</a>
                    <h3>Atenciones</h3>
                    
                </div>
                        
            </div>
        </div>        
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['USRDirector'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>




