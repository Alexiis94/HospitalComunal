<?php
    include '../../../Constantes.php';
    include '../../../librerias.php';
    
    if(isset($_SESSION['USRSecretaria'])) {
    //QUERY Consulta
    $sqlConsulta="select idAtencion, rutPaciente, fechaAtencion from consulta;";
    $miqueryConsulta=mysqli_query($con,$sqlConsulta);    
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
                    <form action="../../../controladores/secretaria/atencion/eliminar.php" method="POST">
                        <div><label>ID Consulta</label>
                            <select name="idAtencion">
                                <?php 
                                    while($idConsultalst = mysqli_fetch_array($miqueryConsulta)) { 
                                    ?> 
                                    <option value =  <?php echo $idConsultalst['idAtencion'];?> >
                                    <?php echo $idConsultalst['idAtencion'].' - Paciente: '.$idConsultalst['rutPaciente'].' - Fecha Atencion:'.$idConsultalst['fechaAtencion']; ?>

                                    </option> 
                                    <?php 
                                    }
                                    ?> 
                            </select>
                        </div>
                        
                        <input type="submit" value="Eliminar">
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