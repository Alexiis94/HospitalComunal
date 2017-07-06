<?php

class Paciente{
    var $rut;
    var $idPerfil;
    var $nombrePaciente;
    var $fechaNacimiento;
    var $sexo;
    var $direccion;
    var $telefono;
    
    function __construct($rut=0,$idPerfil=0,$nombrePaciente=0,$fechaNacimiento="",$sexo="",$direccion="",$telefono=""){
            $this->rut=$rut;
            $this->idPerfil=$idPerfil;
            $this->nombrePaciente=$nombrePaciente;
            $this->fechaNacimiento=$fechaNacimiento;
            $this->sexo=$sexo;
            $this->direccion=$direccion;
            $this->telefono=$telefono;
    }    
    
    function AgregarPaciente(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        $sql="INSERT INTO paciente(rut, idPerfil, nombrePaciente, fechaNacimiento, sexo, Direccion, Telefono) VALUES ('$this->rut',"
                . " $this->idPerfil, '$this->nombrePaciente','$this->fechaNacimiento','$this->sexo','$this->direccion','$this->telefono');";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function ModificarPaciente(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;     
        $sql="UPDATE paciente SET nombrePaciente='$this->nombrePaciente',"
                . "fechaNacimiento='$this->fechaNacimiento',sexo='$this->sexo',Direccion='$this->direccion',Telefono='$this->telefono' WHERE rut='$this->rut';";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    
    function EliminarPaciente(){
        $oConn=new Conexion();
        
        if ($oConn->Conectar())
        $db=$oConn->objconn;
        else
            return false;
        
        $sql="DELETE FROM paciente WHERE rut='$this->rut';";
              
        $resultado=$db->query($sql);
               
        if ($resultado)
            return true;
        else
            return false;        
    }
    
    function TraertVenta()
    {
        $oConn = new Conexion();
        $oConn->Conectar();
        $db = $oConn->objconn; 

        $sql = "SELECT rut,idPerfil,nombrePaciente,fechaNacimiento,sexo,Direccion,Telefono FROM paciente WHERE rut='$this->rut';";
        $resultado = $db->query($sql);
        
        while($fila = $resultado->fetch_assoc()){         
          $oPaciente = new Paciente($fila["rut"],
                                        $fila["idPerfil"],
                                        $fila["nombrePaciente"],
                                        $fila["fechaNacimiento"],
                                        $fila["sexo"],
                                        $fila["Direccion"],
                                        $fila["Telefono"]);
         }
         return $oPaciente;
    }
    
}
