<?php
$nombres = "Marcos,Manuel,Yoel";
$horas = "40,30,45";
$tarifa = "15,20,12";

$arrayNombres = explode(",", $nombres);
$arrayHoras   = explode(",", $horas);
$arrayTarifas = explode(",", $tarifa);

$empleados = [];

    for ($i=0; $i < count($arrayNombres) ; $i++) { 
        $nombre = trim($arrayNombres[$i]);
        $empleados[$nombre] = [
            'horas' => $arrayHoras[$i],
            'tarifa' => $arrayTarifas[$i]
        ];
    }

var_dump($empleados);

