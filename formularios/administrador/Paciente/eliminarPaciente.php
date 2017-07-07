<?php
    include '../../../Constantes.php';
    include '../../../librerias.php';
    
    if(isset($_SESSION['USRAdministrador'])) {
    //QUERY Paciente
    $sqlPaciente="select rut, nombrePaciente from paciente";
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
                <h1>Medico - Despedir</h1>
                <div id="eliminarUsuario">
                    <div id="Paciented">
                    <form action="../../../controladores/Administrador/Paciente/eliminar.php" method="POST">
                        <div><label>RUT Paciente</label>
                            <select name="rut">
                                <?php 
                                    while($idPacientelst = mysqli_fetch_array($miqueryPaciente)) { 
                                    ?> 
                                    <option value =  <?php echo $idPacientelst['rut'];?> >
                                    <?php echo $idPacientelst['nombrePaciente'].' - '.$idPacientelst['rut']; ?>

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