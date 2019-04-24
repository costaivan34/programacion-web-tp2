<?php


require './views/index1.view.php';
require './models/turno.php';
$form = new turno(null);

if($_GET){
    if(!validaNombre($_GET['Nombre'])) {
     echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
    }else{
       $form->this.setNombre($_GET['Nombre']);
        if( !validaMail($_GET['Mail']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
         $form->this.setMail($_GET['Mail']);
            if( !validaTelefono($_GET['Tel']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
            $form->setTelefono($_GET['Tel']);
              if( !validaEdad($_GET['Edad']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
             $form->setEdad($_GET['Edad']);     
             if( !validaCalzado($_GET['Calzado']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
                 $form->setCalzado($_GET['Calzado']); 
                 if( !validaAltura($_GET['Altura']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
            $form->setAltura($_GET['Altura']);         
            if( !validaFnacimiento($_GET['Nacimiento']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
               $form->setFnacimiento($_GET['Nacimiento']); 
               if( !validaPelo($_GET['Color']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
              $form->setPelo($_GET['Color']);      
             if( !validaFecha($_GET['Fecha']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{   
                 $form->setFecha($_GET['Fecha']);
                 if( !validaFecha($_GET['Turno']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{ 
           $form->setHorario($_GET['Turno']);          
        echo "El formulario fue enviado con exito y fue aceptado";
           echo "Resumen del turno";                     
        echo "FECHA:". $_GET['Fecha'];
        echo "HORA:". $_GET['Turno'];
        echo "PACIENTE:". $_GET['Nombre'];           
        }
        }
    }
    }
    }
    }
    }
    }
    }
    }
}
   function validaNombre($value){
   if(trim($value) == ''){
      return false;
   }else{
      return true;
   }
}

 function validaMail($value){
    if(filter_var($value, FILTER_VALIDATE_EMAIL)=== FALSE){
      return false;
   }else{
      return true;
   }
}

 function validaTelefono($value){
   if(filter_var($value, FILTER_VALIDATE_INT) === FALSE){
      return false;
   }else{
      return true;
   }
}

 function validaEdad($value){
    if(filter_var($value, FILTER_VALIDATE_INT) === FALSE){
      return false;
   }else{
    if ($value < 1 || $value > 120) {
        return false;
    }else
      return true;
    }
}

 function validaCalzado($value){
   if(filter_var($value, FILTER_VALIDATE_INT) === FALSE){
      return false;
   }else{
       if ($value < 20 || $value > 45) {
        return false;
    }else
      return true;
    }
   }

 function validaAltura($value){
    if(filter_var($value, FILTER_VALIDATE_INT) === FALSE){
      return false;
   }else{
      if ($value < 100|| $value > 220) {
        return false;
    }else
      return true;
    }
   }

 function validaFnacimiento($value){
   if(trim($value) == ''){
      return false;
   }else{
      return true;
   }
 }
 function validaPelo($value){
   if(trim($value) == ''){
      return false;
   }else{
      return true;
   }
 }
 function validaFecha($value){
   if(trim($value) == ''){
      return false;
   }else{
      return true;
   }
 }
 function validaHora($value){
   if(trim($value) == ''){
      return false;
   }else{
      return true;
   }
 }


?>
