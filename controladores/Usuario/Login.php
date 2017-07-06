<?php
    include '../../constantes.php';
    include '../../librerias.php';
?>
<?php
$oUsr = new Usuario();
$oUsr->nombreUsuario=$_POST['user'];
$oUsr->contrasenna=$_POST['pass'];





if( $oUsr->VerificarUsuarioClave()){
    //Trae el usuario de la base de datos existente con todos sus datos
    $oUsuarioDB = new Usuario();
    $oUsuarioDB = $oUsr->TraerUsuario();
    
    
    //Si es un Director
    if($oUsuarioDB->idPerfil==1)
    {
        $_SESSION['USRDirector']=$oUsuarioDB;
        header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
    }
    
    //Si es un Administrador
    if($oUsuarioDB->idPerfil==2)
    {
        $_SESSION['USRAdministrador']=$oUsuarioDB;
        header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
    }
    
    //Si es una Secretaria
    if($oUsuarioDB->idPerfil==3)
    {
        $_SESSION['USRSecretaria']=$oUsuarioDB;
        header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
    }
    
    //Si es un Paciente
    if($oUsuarioDB->idPerfil==4)
    {
        $_SESSION['USRPaciente']=$oUsuarioDB;
        header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
    }
    
}
else
{
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}


