<?php
include '../../../Constantes.php';
include '../../../librerias.php';

if (isset($_SESSION['USRAdministrador'])) {
    //QUERY Usuario
    $sqlUsuario = "select idUsuario, nombreUsuario from usuario where idPerfil=4";
    $miqueryUsuario = mysqli_query($con, $sqlUsuario);
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
                    <div id="Paciente">
                        <form action="../../../controladores/Administrador/Paciente/registrar.php" method="POST">
                            <div><label>Nombre Paciente</label>
                                <input type="text" name="nombrePaciente">
                            </div>
                            <div><label>Rut</label>
                                <input type="number" name="rutPaciente">
                            </div>
                            <div><label>Usuario</label>
                                <select name="idUsuario">
                                    <?php
                                    while ($idUsuariolst = mysqli_fetch_array($miqueryUsuario)) {
                                        ?> 
                                        <option value =  <?php echo $idUsuariolst['idUsuario']; ?> >
                                            <?php echo $idUsuariolst['nombreUsuario'] . ' - ' . $idUsuariolst['idUsuario']; ?>

                                        </option> 
                                        <?php
                                    }
                                    ?> 
                                </select>
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
                                <input type="date" name="fechaNacimiento"><br>
                            </div><br>
                            <div><label>Direccion</label>
                                <input type="text" name="direccion">
                            </div>
                            <div><label>Telefono</label>
                                <input type="text" name="telefono">
                            </div>
                            <input type="submit" value="Agregar">
                        </form></div>
                </div>

            </div> 
        </form>


    </body>
    </html>
<?php } ?>

<?php
if (!isset($_SESSION['USRAdministrador'])) {
    header('Location:http://localhost:' . $_SERVER['SERVER_PORT'] . '/HospitalComunal/index.php');
}?>