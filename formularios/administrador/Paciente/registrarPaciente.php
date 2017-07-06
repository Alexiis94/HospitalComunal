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
                <h1>Paciente - Agregar</h1>
                <div id="registrarUsuario">
                    <form action="../../../controladores/Administrador/Paciente/registrar.php" method="POST">
                        <div><label>Nombre Paciente</label>
                            <input type="text" name="nombrePaciente">
                        </div>
                        <div><label>Rut</label>
                            <input type="number" name="rutPaciente">
                        </div>
                        <div><label>Sexo</label>
                            <select name="sexo">
                                    <option value = 'Masculino'>
                                        Mascilino
                                    </option> 
                                    <option value = 'Femenino'>
                                        Femenino
                                    </option> 
                                    
                            </select>
                        </div>
                        <div><label>Fecha Nacimiento</label>
                            <input type="date" name="fechaNacimiento">
                        </div>
                        <div><label>Direccion</label>
                            <input type="text" name="direccion">
                        </div>
                        <div><label>Telefono</label>
                            <input type="text" name="telefono">
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