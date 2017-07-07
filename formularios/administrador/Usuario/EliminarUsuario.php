<?php
    include '../../../Constantes.php';
    include '../../../librerias.php';
    
    if(isset($_SESSION['USRAdministrador'])) {
    //QUERY Perfil
    $sqlUsuario="select idUsuario, nombreUsuario from usuario";
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
                <h1>Usuario - Eliminar</h1>
                <div id="eliminarUsuario"><div id="Usuariop">
                    <form action="../../../controladores/Administrador/Usuario/eliminar.php" method="POST">
                        <div><label>ID Perfil</label>
                            <select name="idUsuario">
                                <?php 
                                    while($idUsuariolst = mysqli_fetch_array($miqueryUsuario)) { 
                                    ?> 
                                    <option value =  <?php echo $idUsuariolst['idUsuario'];?> >
                                    <?php echo $idUsuariolst['nombreUsuario'].' - '.$idUsuariolst['idUsuario']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        </div>
                        
                        <input type="submit" value="Eliminar">
                    </form></div>
                </div>
            
        </div> 
        </form>
        
        
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['USRAdministrador'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>