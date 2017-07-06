<?php
    include '../../../Constantes.php';
    include '../../../Librerias.php';
    if(isset($_SESSION['USRDirector'])) {
    //QUERY Paciente
    $sqlPaciente="SELECT rut,nombrePaciente,fechaNacimiento,sexo,Direccion,Telefono FROM paciente;";
    $miqueryPaciente=mysqli_query($con,$sqlPaciente);
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
                <h1>Mantenedor Pacientes - Lista de Pacientes</h1>
                <div>
                    <div id="divVista">Rut Paciente</div>
                    <div id="divVista">Nombre Paciente</div>
                    <div id="divVista">Fecha Nacimiento</div>
                    <div id="divVista">Sexo</div>
                    <div id="divVista">Direccion</div>
                    <div id="divVista">Telefono</div><BR>
                    
                        <?php 
                            while($idPacientelst = mysqli_fetch_array($miqueryPaciente)) { 
                                echo '<div id="divVista">'.$idPacientelst['rut'].'</div>'
                                        .'<div id="divVista">'.$idPacientelst['nombrePaciente'].'</div>'
                                        .'<div id="divVista">'.$idPacientelst['fechaNacimiento'].'</div>'
                                        .'<div id="divVista">'.$idPacientelst['sexo'].'</div>'
                                        .'<div id="divVista">'.$idPacientelst['Direccion'].'</div>'
                                        .'<div id="divVista">'.$idPacientelst['Telefono'].'</div>'.'<br>'; 
                            }
                        ?>
                </div>
                        
            </div>
        </div>        
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['USRDirector'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>




