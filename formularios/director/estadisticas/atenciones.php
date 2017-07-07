<?php
    include '../../../Constantes.php';
    include '../../../Librerias.php';
    if(isset($_SESSION['USRDirector'])) {
        /*No está hecho*/
    //QUERY Consulta
    $sqlAtencion="SELECT rut,idPerfil,idUsuario,nombrePaciente,fechaNacimiento,sexo,Direccion,Telefono FROM paciente order by sexo;";
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
                <h1>Consulta - Lista de Consultas</h1>
                <div>
                    <div id="divVista">RUT</div>
                    <div id="divVista">ID Perfil</div>
                    <div id="divVista">ID Usuario</div>
                    <div id="divVista">Nombre Paciente</div>
                    <div id="divVista">Fecha Nacimiento</div>
                    <div id="divVista">Sexo</div>
                    <div id="divVista">Direccion</div>
                    <div id="divVista">Telefono</div><BR>
                    
                        <?php 
                            while($idAtencionlst = mysqli_fetch_array($miqueryAtencion)) { 
                                echo '<div id="divVista">'.$idAtencionlst['rut'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['idPerfil'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['idUsuario'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['nombrePaciente'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['fechaNacimiento'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['sexo'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['Direccion'].'</div>'
                                        .'<div id="divVista">'.$idAtencionlst['Telefono'].'<br>'; 
                                
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