<?php
    include 'constantes.php';
    include 'librerias.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div id="Cabecera">
            
        </div>
        <?php if(isset($_SESSION['USR'])) { ?>
        
        <div id="cerrarSesion" align="right"><button><a href="controladores/Usuario/CerrarSesion.php">Cerrar Sesion</a></button></div>
        <div id="Cuerpo">
            <h1>Mantenedor de Pacientes: </h1>
            
            <div id="mantDirec">
                <a href="formularios/director/listarPaciente.php">Listar Paciente</a>
            <a href="formularios/director/estadisticaSistema.php">Consultar Sistema</a>
            </div>
            
            <h1>Mantenedor de Administrador: </h1>
            
            <div id="mantAdmi">
            <a href="formularios/administrador/Paciente/registrarPaciente.php">Registrar Pacientes</a>
            <a href="formularios/administrador/Paciente/consultarPaciente.php">Consultar Pacientes</a>
            <a href="formularios/administrador/Paciente/listarPaciente.php">Listar Pacientes</a>
            <a href="formularios/administrador/Paciente/eliminarPaciente.php">Eliminar Pacientes</a>
            <br>
            <br>
            <a href="formularios/administrador/Medico/resgistarMedico.php">Registrar Medico</a>
            <a href="formularios/administrador/Medico/consultarMedico.php">Consultar Medico</a>
            <a href="formularios/administrador/Medico/listarMedico.php">Listar Medico</a>
            <a href="formularios/administrador/Medico/eliminarMedico.php">Eliminar Medico</a>
            <br>
            <br>
            <a href="formularios/administrador/Usuario/resgistarUsuario.php">Registrar Usuario</a>
            <a href="formularios/administrador/Usuario/consultarUsuario.php">Consultar Usuario</a>
            <a href="formularios/administrador/Usuario/listarUsuario.php">Listar Usuario</a>
            <a href="formularios/administrador/Usuario/EliminarUsuario.php">Eliminar Usuario</a>
            </div>

            <h1>Mantenedor de Secretaria: </h1>
            
            <div id="mantSecre">
            <a href="formularios/secretaria/listarPaciente.php">Listar Paciente</a>
            <a href="formularios/secretaria/consultarPaciente.php">Consultar Paciente</a>
            <a href="formularios/secretaria/listarMedico.php">Listar Medico</a>
            <br>
            <br>
            <a href="formularios/secretaria/consultarMedico.php">Consultar Medico</a>
            <a href="formularios/secretaria/agendarAtencion.php">Agendar  Atencion</a>
            <a href="formularios/secretaria/eliminarAtencion.php">Eliminar Atenciones</a>
            <br>
            <br>
            <a href="formularios/secretaria/perdidaConsulta.php">Consulta Perdida</a>
            
            </div>
            
            <h1>Mantenedor de Pacientes: </h1>
            
            <div id="mantPaci">
                <a href="formularios/paciente/listarPaciente.php">Listar Paciente</a>
            <a href="formularios/paciente/consultarPaciente.php">Consultar Paciente</a>
            </div>
        </div>
        <?php } ?> 
        <?php if(!isset($_SESSION['USR'])) { ?>
        <div id="login">
        <h1>Mantenedor de usuarios: </h1>
        <form action="controladores/Usuario/Login.php" method="POST">
            <div>User: <input type="text" name="user"></div>
            <div>Password: <input type="password" name="pass"></div>
        <input type="submit" value="Login">
        </form>
        </div>
        
        <?php
         } 
        ?>
    </body>
</html>
