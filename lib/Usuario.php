<?php
class Usuario{
    
    var $idusuario;
    var $user;
    var $pass;
    var $newPass;
    var $nombre;
    var $apellido;
    
    /* VALIDA LA EXISTENCIA DEL USUARIO*/
    function VerificarUsuarioClave(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        
        $clavemd5 = md5($this->pass);
        $sql = "SELECT * FROM usuario WHERE usuario='$this->user' AND password='$clavemd5'";
        $resultado=$db->query($sql);
        
        if($resultado->num_rows>=1){
            return true;
        }else{
            return false;
        }
    }
    
    function VerificarClave(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        
        $clavemd5 = md5($this->pass);
        $sql = "SELECT * FROM usuario WHERE password='$clavemd5'";
        $resultado=$db->query($sql);
        
        if($resultado->num_rows>=1){
            return true;
        }else{
            return false;
        }
    }
    
    function verificarClaveAdmin(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        $clavemd5 = md5($this->pass);
        $sql = "SELECT * FROM usuario WHERE password='$clavemd5' AND usuario='admin';";
                $resultado=$db->query($sql);
        
        if($resultado->num_rows>=1){
            return true;
        }else{
            return false;
        }
        
    }
            
    function agregarUsuario(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        
        $clavemd5 = md5($this->pass);
        $sql = "INSERT INTO usuario(usuario, password, nombre, apellido) VALUES('$this->user', '$clavemd5', '$this->nombre'"
                . ", '$this->apellido');";
        $resultado=$db->query($sql);
        
    }
    
    function modificarUsuario(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        $clavemd5 = md5($this->newPass);
        $sql = "UPDATE usuario SET password = '$clavemd5', nombre = '$this->nombre', apellido = '$this->apellido' "
                . "WHERE usuario = '$this->user';";
        $resultado=$db->query($sql);
    }
    
    function eliminarUsuario(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        $clavemd5 = md5($this->newPass);
        $sql = "DELETE FROM usuario WHERE usuario='$this->user';";
        $resultado=$db->query($sql);
    }
    
}
