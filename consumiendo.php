<?php
include("db.php");

function API($ruta){
    $url = "https://rickandmortyapi.com/api";
    $respuesta = $url.$ruta;
    return $respuesta;
}

$direccion = API("/location/12,5,9");
$json= file_get_contents($direccion);
$datos = json_decode($json,true);

echo $json;

echo "<br /> "; 

var_dump($datos[1]);
echo "<br /> ";

foreach($datos as $key){
     echo $key;
     echo "<br /> ";
}

?>