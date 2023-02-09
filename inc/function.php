<?php

function saveMessage($data){
    $file = 'duomenys/informacija.txt';
    $content = file_get_contents($file);
    $formData = implode(',',$data);
    $content .=$formData."/n";
    file_put_contents($file,$content);
}

function getData(){
    $duotaInformacija = file_get_contents('duomenys/informacija.txt');
    $duotaInformacija = explode('/n', $duotaInformacija);
    return $duotaInformacija;
}





