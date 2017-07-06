<?php
    include '../../../Constantes.php';
    include '../../../Librerias.php';
    if(isset($_SESSION['USRAdministrador'])) {
    //QUERY Usuarios
    $sqlUsuario="SELECT idUsuario, idPerfil, nombreUsuario FROM usuario ";
    $miqueryUsuario=mysqli_query($con,$sqlUsuario);
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
                <h1>Mantenedor Usuario - Lista de Usuarios</h1>
                <div>
                    <div id="divVista">ID Usuario</div>
                    <div id="divVista">ID Nombre Usuario</div>
                    <div id="divVista">ID Perfil</div><BR>
                        <?php 
                            while($idUsuariolst = mysqli_fetch_array($miqueryUsuario)) { 
                                echo '<div id="divVista">'.$idUsuariolst['idUsuario'].'</div>'
                                        .'<div id="divVista">'.$idUsuariolst['idPerfil'].'</div>'
                                        .'<div id="divVista">'.$idUsuariolst['nombreUsuario'].'<br>'; 
                            }
                        ?>
                </div>
                        
            </div>
        </div>        
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['USRAdministrador'])) {
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>



