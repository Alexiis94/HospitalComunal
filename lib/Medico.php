<?php

class Medico{
    var $rut;
    var $nombreMedico;
    var $fechaContratacion;
    var $especialidad;
    var $valorConsulta;
    
    function __construct($rut=0,$nombreMedico="",$fechaContratacion="",$especialidad=0,$valorConsulta=0){
            $this->rut=$rut;
            $this->nombreMedico=$nombreMedico;
            $this->fechaContratacion=$fechaContratacion;
            $this->especialidad=$especialidad;
            $this->valorConsulta=$valorConsulta;
    }    
    
    function AgregarMedico(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO medico(rut,nombreMedioco,fechaContratacion,especialidad,valorConsulta) VALUES  ($this->rut,"
                . " '$this->nombreMedico', '$this->fechaContratacion',$this->especialidad,$this->valorConsulta);";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function ModificarMedico(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;     
        $sql="UPDATE medico SET nombreMedioco='$this->nombreMedico',fechaContratacion='$this->fechaContratacion'"
                . ",especialidad=$this->especialidad,valorConsulta=$this->valorConsulta WHERE rut='$this->rut';";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    
    function EliminarMedico(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM medico WHERE rut='$this->rut';";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function TraerMedico()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "SELECT rut,nombreMedioco,fechaContratacion,especialidad,valorConsulta FROM medico WHERE rut='$this->rut';";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oMedico = new Medico($fila["rut"],
                                        $fila["nombreMedioco"],
                                        $fila["fechaContratacion"],
                                        $fila["especialidad"],
                                        $fila["valorConsulta"]);
         }
         return $oMedico;
    }
    
}


