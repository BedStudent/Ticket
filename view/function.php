<?php


function saveInfo($data){
    $file = 'duomenys/informacija.txt';
    $content = file_get_contents($file);
    $formData = implode(',',$data);
    $content.=$formData."/n";
    file_put_contents($file,$content);
}
function getInfo(){
    $duotaInformacija = file_get_contents('duomenys/informacija.txt');
    $duotaInformacija = explode('/n', $duotaInformacija);
    return $duotaInformacija;
}

function validate($DATA){
    global $validationErrors;
    if(empty($DATA['KelioneIs'])){
        $validationErrors[] = 'Nepasirikote is kur isvykstate';
    }
    if(empty($DATA['KelioneI'])){
        $validationErrors[] = 'Nepasirinkote i kur vykstate';
    }
    if(empty($DATA['bagazas'])){
        $validationErrors[] = 'Nepasirinkote bagazo svorio';
    }
    if(empty($DATA['firstName']) || !preg_match('/^[A-Za-z0-9]{1,10}$/',$DATA['firstName'])){
        $validationErrors[] = 'Neivestas Vardas';
    }
    if(empty($DATA['firstName']) || !preg_match('/^[A-Za-z0-9]{1,10}$/',$DATA['firstName'])){
        $validationErrors[] = 'Neivestas Vardas';
    }
    if(empty($DATA['email']) || !preg_match('/^(.*?(\@\b)[^$]*)$/',$DATA['email'])){
        $validationErrors[] = 'Neivestas Pastas';
    }
    if(empty($DATA['message'])|| !preg_match('/^[A-Za-z0-9]{1,5}$/',$DATA['message'])){
        $validationErrors[] = 'Neivesta zinute arba Neatitinka duomenu formato';
    }
    return $validationErrors;
}





