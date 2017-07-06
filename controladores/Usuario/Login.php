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
    $_SESSION['USR']=$oUsuarioDB;
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}
else
{
    header('Location:http://localhost:'.$_SERVER['SERVER_PORT'].'/HospitalComunal/index.php');
}


