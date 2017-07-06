<?php

class Especialidad{
    var $idEspecialidad;
    var $nombreEspecialidad;
    
    function __construct($idEspecialidad=0,$nombreEspecialidad=""){
            $this->idEspecialidad=$idEspecialidad;
            $this->nombreEspecialidad=$nombreEspecialidad;
    }    
    
    function AgregarEspecialidad(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO especialidad(nombreEspecialidad) VALUES('$this->nombreEspecialidad');";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function ModificarEspecialidad(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;     
        $sql="UPDATE especialidad SET nombreEspecialidad='$this->nombreEspecialidad' WHERE idEspecialidad=$this->idEspecialidad;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    
    function EliminarEspecialidad(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM especialidad WHERE idEspecialidad=$this->idEspecialidad;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function TraerEspecialidad()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "SELECT idEspecialidad, nombreEspecialidad FROM especialidad WHERE idEspecialidad=$this->idEspecialidad;";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oEspecialidad = new Especialidad($fila["idEspecialidad"],
                                        $fila["nombreEspecialidad"]);
         }
         return $oEspecialidad;
    }
    
}

