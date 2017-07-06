<?php
    include '../../../Constantes.php';
    include '../../../librerias.php';
    
    if(isset($_SESSION['USRAdministrador'])) {
    //QUERY Perfil
    $sqlMedico="select rut, nombreMedioco from medico";
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
        <div id="Cuerpo">
                <h1>Medico - Despedir</h1>
                <div id="eliminarUsuario">
                    <form action="../../../controladores/Administrador/Medico/eliminar.php" method="POST">
                        <div><label>RUT MEDICO</label>
                            <select name="rut">
                                <?php 
                                    while($idMedicolst = mysqli_fetch_array($miqueryMedico)) { 
                                    ?> 
                                    <option value =  <?php echo $idMedicolst['rut'];?> >
                                    <?php echo $idMedicolst['nombreMedioco'].' - '.$idMedicolst['rut']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        </div>
                        
                        <input type="submit" value="Despedir">
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