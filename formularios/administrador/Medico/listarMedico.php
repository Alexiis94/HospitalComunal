<?php
    include '../../../Constantes.php';
    include '../../../Librerias.php';
    if(isset($_SESSION['USRAdministrador'])) {
    //QUERY Usuarios
    $sqlMedico="SELECT rut, nombreMedioco, fechaContratacion, especialidad, valorConsulta FROM medico ";
    $miqueryMedico=mysqli_query($con,$sqlMedico);
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
        
            <div id="ListarUsuarios">
                <h1>Mantenedor Medico - Lista de Medicos</h1>
                
                    <div id="divVistaM">Rut Medico</div>
                    <div id="divVistaM">Nombre Medico</div>
                    <div id="divVistaM">Fecha Contratacion</div>
                    <div id="divVistaM">Especialidad</div>
                    <div id="divVistaM">Vaalor Consulta</div><BR>
                    
                        <?php 
                            while($idMedicolst = mysqli_fetch_array($miqueryMedico)) { 
                                echo '<div id="divVista">'.$idMedicolst['rut'].'</div>'
                                        .'<div id="divVistaM">'.$idMedicolst['nombreMedioco'].'</div>'
                                        .'<div id="divVistaM">'.$idMedicolst['fechaContratacion'].'</div>'
                                        .'<div id="divVistaM">'.$idMedicolst['especialidad'].'</div>'
                                        .'<div id="divVistaM">'.$idMedicolst['valorConsulta'].'</div>'.'<br>'; 
                            }
                        ?>
                </div>
       
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['USRAdministrador'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>



