<?php

/* 
File: calc.php
Author: Gubis Zsombor Dániel
Copyright: 2022, Gubis Zsombor Dániel
Group: Szoft_I_N
Date: 2022-05-26
Github: https://github.com/Zsomi4/
Licenc: GNU GPL
 */

echo file_get_contents('templates/head.html');


$page = file_get_contents('templates/calc.html');

function calcWeight($weight, $height) {    
    $final = $weight/pow($height, 2);
    return $final;
}


if(
    !empty($_GET['weight']) and 
    !empty($_GET['height']) 
) {
    $weight = $_GET['weight'];
    $height = $_GET['height'];
    $final = calcWeight($weight, $height);    
}else {
    $final = "Nem hagyhatod üresen a két mezőt!";
}





$page = str_replace('{{ result }}', $final, $page);

echo $page;

echo file_get_contents('templates/foot.html');