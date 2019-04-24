<?php

require_once '../models/turno.php';
$form = new turno(null);
$miVector;
$fp = fopen('../db/turnos.txt','r');
    $loop = 1; 
    while (!feof($fp)) { 
    $loop++;
    $string = fgets($fp); 
    $form = unserialize($string);
if (strcmp($form->getNombre(), $buscarClase->getNombre()) === 0){    
$nombre = $form-> getNombre();
$mail = $form-> getMail();
$tel = $form-> getTelefono();
$edad =$form-> getEdad();
$calzado = $form -> getCalzado();
$altura = $form -> getAltura();
$nacimiento = $form -> getNacimiento();
$pelo = $form -> getPelo();
$fecha= $form ->getFecha();
$hora = $form ->getHorario();
        require '../views/ficha.view.php';
    }    
    $fp++;
}                                 
fclose($fp);
