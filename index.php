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
        <?php if(isset($_SESSION['USRDirector'])) { ?>
        
        
        <div id="Cuerpo">
            <div id="cerrarSesion" align="right"><button><a href="controladores/Usuario/CerrarSesion.php">Cerrar Sesion</a></button></div>
            <h1>Mantenedor de Director: </h1>
            
            <div id="mantDirec">
                <h3>Pacientes</h3>
                <a href="formularios/director/listarPaciente.php">Listar Paciente</a>
                <a href="formularios/director/consultarPaciente.php">Consultar Paciente</a>
                <h3>Medicos</h3>
                <a href="formularios/director/listarPaciente.php">Listar Medicos</a>
                <a href="formularios/director/consultarPaciente.php">Consultar Medicos</a>
                <h3>Atenciones</h3>
                <a href="formularios/director/listarPaciente.php">Listar Atenciones</a>
                <a href="formularios/director/consultarPaciente.php">Consultar Atenciones</a>
                <h3>Estadisticas del sistema</h3>
                <a href="formularios/director/estadisticaSistema.php">Consultar Sistema</a>
                
            </div>
        </div>
        <?php }if(isset($_SESSION['USRAdministrador'])) { ?>
        <div id="Cuerpo">
            <div id="cerrarSesion" align="right"><button><a href="controladores/Usuario/CerrarSesion.php">Cerrar Sesion</a></button></div>
            <h1>Mantenedor de Administrador: </h1>
            
            <div id="mantAdmi">
                <h3>Pacientes</h3>
            <a href="formularios/administrador/Paciente/registrarPaciente.php">Registrar Pacientes</a>
            <a href="formularios/administrador/Paciente/consultarPaciente.php">Consultar Pacientes</a>
            <a href="formularios/administrador/Paciente/listarPaciente.php">Listar Pacientes</a>
            <a href="formularios/administrador/Paciente/eliminarPaciente.php">Eliminar Pacientes</a>
            <br>
            <h3>Medico</h3>
            <br>
            <a href="formularios/administrador/Medico/resgistarMedico.php">Contratar Medico</a>
            <a href="formularios/administrador/Medico/consultarMedico.php">Consultar Medico</a>
            <a href="formularios/administrador/Medico/listarMedico.php">Listar Medico</a>
            <a href="formularios/administrador/Medico/eliminarMedico.php">Despedir Medico</a>
            <br>
            <h3>Usuario</h3>
            <br>
            <a href="formularios/administrador/Usuario/resgistarUsuario.php">Registrar Usuario</a>
            <a href="formularios/administrador/Usuario/consultarUsuario.php">Consultar Usuario</a>
            <a href="formularios/administrador/Usuario/listarUsuario.php">Listar Usuario</a>
            <a href="formularios/administrador/Usuario/EliminarUsuario.php">Eliminar Usuario</a>
            </div>
        </div>    
        <?php }if(isset($_SESSION['USRSecretaria'])) { ?>
        <div id="Cuerpo">
            <div id="cerrarSesion" align="right"><button><a href="controladores/Usuario/CerrarSesion.php">Cerrar Sesion</a></button></div>
            <h1>Mantenedor de Secretaria: </h1>
            
            <div id="mantSecre">
            <h3>Paciente</h3>
            <a href="formularios/secretaria/listarPaciente.php">Listar Paciente</a>
            <a href="formularios/secretaria/consultarPaciente.php">Consultar Paciente</a>
            <a href="formularios/secretaria/listarMedico.php">Listar Medico</a>
            <br>
            <h3>Medico</h3>
            <br>
            <a href="formularios/secretaria/consultarMedico.php">Consultar Medico</a>
            <a href="formularios/secretaria/agendarAtencion.php">Agendar  Atencion</a>
            <a href="formularios/secretaria/eliminarAtencion.php">Eliminar Atenciones</a>
            <br>
            <br>
            <a href="formularios/secretaria/perdidaConsulta.php">Consulta Perdida</a>
            
            </div>
        </div>
            <?php }if(isset($_SESSION['USRPaciente'])) { ?>
        <div id="Cuerpo">
            <div id="cerrarSesion" align="right"><button><a href="controladores/Usuario/CerrarSesion.php">Cerrar Sesion</a></button></div>
            <h1>Mantenedor de Pacientes: </h1>
            
            <div id="mantPaci">
                <a href="formularios/paciente/listarPaciente.php">Listar Paciente</a>
            <a href="formularios/paciente/consultarPaciente.php">Consultar Paciente</a>
            </div>
        </div>
        
        <?php } ?> 
        <?php if(!isset($_SESSION['USRPaciente']) && !isset($_SESSION['USRSecretaria']) && !isset($_SESSION['USRDirector'])
                && !isset($_SESSION['USRAdministrador'])) { ?>
        <div id="login">
        <h1>Mantenedor de usuarios: </h1>
        <form action="controladores/Usuario/Login.php" method="POST">
            <div>User: <input type="text" name="user"></div>
            <div>Password: <input type="password" name="pass"></div>
        <input type="submit" value="Login">
        </form>
        </div>
        
       
    </body>
</html>
 <?php
            } 
        ?>
