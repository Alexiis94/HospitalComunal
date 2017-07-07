<?php
    include '../../../Constantes.php';
    include '../../../librerias.php';
    
    if(isset($_SESSION['USRAdministrador'])) {
    //QUERY Especialidad
    $sqlEspecialidad="select idEspecialidad, nombreEspecialidad from especialidad";
    $miqueryEspecialidad=mysqli_query($con,$sqlEspecialidad);    
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
                <h1>Mantenedor Medico - Contratar</h1>
                <div id="registrarUsuario">
                    <div id="Medico">
                    <form action="../../../controladores/Administrador/Medico/registar.php" method="POST">
                        <div><label>Nombre Medico</label>
                            <input type="text" name="nombreMedico">
                        </div>
                        <div><label>Rut</label>
                            <input type="number" name="rutMedico">
                        </div>
                        <div><label>ID Especialidad</label>
                            <select name="idEspecialidad">
                                <?php 
                                    while($idEspecialidadlst = mysqli_fetch_array($miqueryEspecialidad)) { 
                                    ?> 
                                    <option value =  <?php echo $idEspecialidadlst['idEspecialidad'];?> >
                                    <?php echo $idEspecialidadlst['nombreEspecialidad']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        </div>
                        <div><label>Fecha Contratacion</label>
                            <input type="date" name="fechaContratacion">
                        </div><br>
                        <div><label>Valor Consulta</label>
                            <input type="number" name="valorConsulta">
                        </div>
                        
                        <input type="submit" value="Contratar">
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