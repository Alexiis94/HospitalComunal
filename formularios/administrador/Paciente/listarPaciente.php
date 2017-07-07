<?php
    include '../../../Constantes.php';
    include '../../../Librerias.php';
    if(isset($_SESSION['USRAdministrador'])) {
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
        
            <div id="ListarUsuarios">
                <h1>Mantenedor Pacientes - Lista de Pacientes</h1>
                
                    <div id="divVistaP">Rut Paciente</div>
                    <div id="divVistaP">Nombre Paciente</div>
                    <div id="divVistaP">Fecha Nacimiento</div>
                    <div id="divVistaP">Sexo</div>
                    <div id="divVistaP">Direccion</div>
                    <div id="divVistaP">Telefono</div><BR
                    </div>
                        <?php 
                            while($idPacientelst = mysqli_fetch_array($miqueryPaciente)) { 
                                echo '<div id="divVistaP">'.$idPacientelst['rut'].'</div>'
                                        .'<div id="divVistaP">'.$idPacientelst['nombrePaciente'].'</div>'
                                        .'<div id="divVistaP">'.$idPacientelst['fechaNacimiento'].'</div>'
                                        .'<div id="divVistaP">'.$idPacientelst['sexo'].'</div>'
                                        .'<div id="divVistaP">'.$idPacientelst['Direccion'].'</div>'
                                        .'<div id="divVistaP">'.$idPacientelst['Telefono'].'</div>'.'<br>'; 
                            }
                        ?>
                </div>
                        
            
        </div>        
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['USRAdministrador'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>




