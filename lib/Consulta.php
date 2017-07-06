<?php

class Consulta{
    var $idAtencion;
    var $fechaAtencion;
    var $rutPaciente;
    var $rutMedico;
    var $idEstado;
    
    function __construct($idAtencion=0,$fechaAtencion="",$rutPaciente=0,$rutMedico=0,$idEstado=0){
            $this->idAtencion=$idAtencion;
            $this->fechaAtencion=$fechaAtencion;
            $this->rutPaciente=$rutPaciente;
            $this->rutMedico=$rutMedico;
            $this->idEstado=$idEstado;
    }    
    
    function AgregarConsulta(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO consulta(fechaAtencion,rutPaciente,rutMedico,idEstado) VALUES ('$this->fechaAtencion',"
                . " $this->rutPaciente, $this->rutMedico,$this->idEstado);";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function ModificarConsulta(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;     
        $sql="UPDATE consulta SET fechaAtencion='$this->fechaAtencion',rutPaciente=$this->rutPaciente,"
                . "rutMedico=$this->rutMedico,idEstado=$this->idEstado WHERE idAtencion=$this->idAtencion;";
              
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
        
        $sql="DELETE FROM consulta WHERE idAtencion=$this->idAtencion;";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function TraerConsulta()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "SELECT idAtencion, fechaAtencion, rutPaciente, rutMedico, idEstado FROM consulta WHERE idAtencion=$this->idAtencion;";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oConsulta = new Consulta($fila["idAtencion"],
                                        $fila["fechaAtencion"],
                                        $fila["rutPaciente"],
                                        $fila["rutMedico"],
                                        $fila["idEstado"]);
         }
         return $oConsulta;
    }
    
}

