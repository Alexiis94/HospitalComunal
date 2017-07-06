<?php

class Perfil{
    var $idPerfil;
    var $nombrePerfil;
    
    function __construct($idPerfil=0,$nombrePerfil=""){
            $this->idPerfil=$idPerfil;
            $this->nombrePerfil=$nombrePerfil;
    }    
    
    function AgregarPerfil(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO perfil(nombrePerfil) VALUES('$this->nombrePerfil');";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function ModificarPerfil(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;     
        $sql="UPDATE perfil SET nombrePerfil='$this->nombrePerfil' WHERE idPerfil=$this->idPerfil;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    
    function EliminarConsulta(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM perfil WHERE idPerfil=$this->idPerfil;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function TraerPerfil()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "SELECT idPerfil, nombrePerfil FROM perfil WHERE idPerfil=$this->idPerfil;";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oPerfil = new Perfil($fila["idPerfil"],
                                        $fila["nombrePerfil"]);
         }
         return $oPerfil;
    }
    
}

