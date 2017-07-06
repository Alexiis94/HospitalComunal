<?php
    include '../../../Constantes.php';
    include '../../../librerias.php';
    
    if(isset($_SESSION['USRAdministrador'])) {
    //QUERY Perfil
    $sqlPerfil="select idPerfil, nombrePerfil from perfil";
    $miqueryPerfil=mysqli_query($con,$sqlPerfil);    
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
                <h1>Mantenedor Usuario - Agregar</h1>
                <div id="registrarUsuario">
                    <form action="../../../controladores/Administrador/Usuario/registar.php" method="POST">
                        <div><label>Nombre Usuario</label>
                            <input type="text" name="nombreUsuario">
                        </div>
                        <div><label>Contraseña Usuario</label>
                            <input type="password" name="contrasennaUsuario">
                        </div>
                        <div><label>ID Perfil</label>
                            <select name="idPerfil">
                                <?php 
                                    while($idPerfillst = mysqli_fetch_array($miqueryPerfil)) { 
                                    ?> 
                                    <option value =  <?php echo $idPerfillst['idPerfil'];?> >
                                    <?php echo $idPerfillst['nombrePerfil']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        </div>
                        
                        <input type="submit" value="Agregar">
                    </form>
                </div>
            
        </div> 
        </form>
        
        
    </body>
</html>
<?php }?>

<?php if(!isset($_SESSION['USRAdministrador'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>