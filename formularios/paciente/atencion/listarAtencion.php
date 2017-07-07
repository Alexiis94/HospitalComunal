<?php
    include '../../../Constantes.php';
    include '../../../Librerias.php';
    if(isset($_SESSION['USRPaciente'])) {
    //QUERY Consulta
    $sqlAtencion="SELECT idAtencion,fechaAtencion,rutPaciente,rutMedico,idEstado FROM consulta where rutPaciente='19585652';";
    $miqueryAtencion=mysqli_query($con,$sqlAtencion);
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
                <h1>Consulta - Lista de Consultas</h1>
                <div>
                    <div id="divVista">ID Atencion</div>
                    <div id="divVista">Fecha Atencion</div>
                    <div id="divVista">Rut Paciente</div>
                    <div id="divVista">Rut Medico</div>
                    <div id="divVista">ID Estado</div><BR>
                    
                        <?php 
                            while($idAtencionlst = mysqli_fetch_array($miqueryAtencion)) { 
                                echo '<div id="divVista">'.$idAtencionlst['idAtencion'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['fechaAtencion'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['rutPaciente'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['rutMedico'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['idEstado'].'<br>'; 
                            }
                        ?>
                </div>
                        
            </div>
        </div>        
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['USRPaciente'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>




