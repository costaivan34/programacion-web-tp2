<?php
require './models/turno.php';
$form = new turno(null);
$miVector;
$fp = fopen('./db/turnos.txt','r');
    $loop = 1; 
    while (!feof($fp)) { 
    $loop++;
    $string = fgets($fp); 
    $form = unserialize($string);    
    $fp++;
   
	$miVector[$loop] = $form;
}                             
    
fclose($fp);
require './views/cronograma.view.php';
