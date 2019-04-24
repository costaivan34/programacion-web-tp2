<?php

require './views/index1.view.php';
require './models/turno.php';
$form = new turno(null);

if($_POST){
    if(!validaNombre($_POST['Nombre'])) {
     echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
    }else{
       $form->this.setNombre($_POST['Nombre']);
        if( !validaMail($_POST['Mail']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
         $form->this.setMail($_POST['Mail']);
            if( !validaTelefono($_POST['Tel']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
            $form->setTelefono($_POST['Tel']);
              if( !validaEdad($_POST['Edad']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
             $form->setEdad($_POST['Edad']);     
             if( !validaCalzado($_POST['Calzado']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
                 $form->setCalzado($_POST['Calzado']); 
                 if( !validaAltura($_POST['Altura']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
            $form->setAltura($_POST['Altura']);         
            if( !validaFnacimiento($_POST['Nacimiento']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
               $form->setFnacimiento($_POST['Nacimiento']); 
               if( !validaPelo($_POST['Color']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{
              $form->setPelo($_POST['Color']);      
             if( !validaFecha($_POST['Fecha']) ) {
         echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{   
                 $form->setFecha($_POST['Fecha']);
                 if( !validaFecha($_POST['Turno']) ) {
        echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
        echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
        }else{ 
           $form->setHorario($_POST['Turno']); 
                if(!($_FILES['Diagnostico']['type'] == "image/jpg" ||$_FILES['Diagnostico']['type'] == "image/png")) {
                echo "El formulario fue enviado con errores, verifique los datos e intente nuevamente";
                echo "<p><a href='view/index.view.php'>Haz clic aquí para volver al formulario</a></p>"; 
                
        }else{
        rename ( $_FILES['Diagnostico']['name'],$_POST['Fecha'] . $_POST['Turno']. $_POST['Nombre']);
        $form->setDiag($_FILES['Diagnostico']);
         echo "El formulario fue enviado con exito y fue aceptado";
        echo "Resumen del turno";                     
        echo "FECHA:". $_POST['Fecha'];
        echo "HORA:". $_POST['Turno'];
        echo "PACIENTE:". $_POST['Nombre'];
        echo "DIAGNOSTICO:". $_FILES['Diagnostico'];
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
