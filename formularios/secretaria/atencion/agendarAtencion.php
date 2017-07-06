<?php
    include '../../../Constantes.php';
    include '../../../librerias.php';
    
    if(isset($_SESSION['USRSecretaria'])) {
    //QUERY Paciente
    $sqlPaciente="select rut, nombrePaciente from paciente";
    $miqueryPaciente=mysqli_query($con,$sqlPaciente); 
    
    //QUERY Medico
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
                <h1>Atenciones - Agendar</h1>
                <div id="registrarUsuario">
                    <form action="../../../controladores/secretaria/atencion/registrar.php" method="POST">
                        <div><label>RUT MEDICO</label>
                            <select name="rutMedico">
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
                        <div><label>RUT Paciente</label>
                            <select name="rutPaciente">
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
                        <div><label>Fecha Atencion</label>
                            <input type="date" name="fechaAtencion">
                        </div>
                        <input type="submit" value="Agendar">
                    </form>
                </div>
            
        </div> 
        </form>
        
        
    </body>
</html>
<?php }?>
<?php if(!isset($_SESSION['USRSecretaria'])) {
            header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}?>