<?php
class Usuario{
    
    var $idUsuario;
    var $nombreUsuario;
    var $contrasenna;
    var $idPerfil;
    
    function __construct($idUsuario=0,$nombreUsuario=0,$contrasenna=0,$idPerfil=0){
            $this->idUsuario=$idUsuario;
            $this->nombreUsuario=$nombreUsuario;
            $this->contrasenna=$contrasenna;
            $this->idPerfil=$idPerfil;
    }  
    
    //Valida la existencia del usuario en la base de datos mediante la contraseña cifrada con md5 y el nombre de usuario
    function VerificarUsuarioClave(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        
        $clavemd5 = md5($this->contrasenna);
        $sql = "SELECT * FROM usuario WHERE nombreUsuario='$this->nombreUsuario' AND password='$clavemd5'";
        $resultado=$db->query($sql);
        
        if($resultado->num_rows>=1){
            return true;
        }else{
            return false;
        }
    }
          
    function AgregarUsuario(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        
        $clavemd5 = md5($this->pass);
        $sql = "INSERT INTO usuario(nombreUsuario, contrasenna, idPerfil) VALUES ('$this->nombreUsuario', '$clavemd5', '$this->idPerfil');";
        $resultado=$db->query($sql);
        
        if ($resultado)
            return true;
        else
            return false;
        
    }
    
    function ModificarUsuario(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        $clavemd5 = md5($this->contrasenna);
        $sql = "UPDATE usuario SET nombreUsuario='$this->nombreUsuario',contrasenna='$clavemd5',idPerfil=$this->idPerfil"
                . " WHERE idUsuario=$this->idUsuario";
        $resultado=$db->query($sql);
        
        if ($resultado)
            return true;
        else
            return false;
    }
    
    function EliminarUsuario(){
        $oConn = new Conexion();
        if ($oConn->Conectar()){
            $db = $oConn -> objconn;
        }else{
            return false;
        }
        $clavemd5 = md5($this->newPass);
        $sql = "DELETE FROM usuario WHERE idUsuario='$this->idUsuario';";
        $resultado=$db->query($sql);
        
        if ($resultado)
            return true;
        else
            return false;
    }
    
    //En caso de ser requerido este metodo extrae los datos del usuario directamente de la base de datos mediante su nombre de Usuario
    function TraertUsuario()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "SELECT idUsuario, nombreUsuario, contrasenna, idPerfil FROM usuario WHERE nombreUsuario=$this->nombreUsuario;";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oUsuario = new Usuario($fila["idUsuario"],
                                        $fila["nombreUsuario"],
                                        $fila["contrasenna"],
                                        $fila["idPerfil"]);
         }
         return $oUsuario;
    }
    
}
