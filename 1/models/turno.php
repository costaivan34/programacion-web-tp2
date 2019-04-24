<?php

class turno {
    private $fields = ['nombre', 'mail', 'telefono','edad','calzado','altura','fnacimiento','pelo','fecha_turno','hora_turno'];
    
    public function __construct()
    {
     //   $this->Model->__construct(null);
      //  $this->$fields
       // $this->db_handler = DatabaseBuilder::getInstance();
       // $this->build($data);
    }
    
    
    
    public function setNombre($value){
        
        $this->$fields[nombre] = $value;      
        
    }
    
    public function setMail($value){
    
            $this->$fields[mail] = $value;    
    }
    
    
    public function setTelefono($value){
        $this->$fields[telefono] = $value;
    }
    
    public function setEdad($value){
        $this->$fields[edad] = $value;
    }
    
     public function  setCalzado($value){
            $this->$fields[calzado] = $value;    
    }
    
     public function setAltura($value){
        $this->$fields[altura] = $value;
    }
    
     public function setFNacimiento($value){  
        $this->$fields[fnacimiento] = $value;
    }
    
     public function setPelo($value){  
        $this->$fields[pelo] = $value;
    }
    
     public function setFecha($value){
        $this->$fields[fecha_turno] = $value;
    }
     public function setHorario($value){
        $this->$fields[hora_turno] = $value;
    }
    
    
   
 
}
?>
