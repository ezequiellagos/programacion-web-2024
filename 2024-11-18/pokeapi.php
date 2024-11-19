<?php

/*
https://pokeapi.co/api/v2/ability/?limit=20&offset=0
Limit: 50
Offset: 0
Devuelve: 0 - 50

https://pokeapi.co/api/v2/ability/?limit=20&offset=20
Limit: 50
Offset: 50
Devuelve: 50 - 100

https://pokeapi.co/api/v2/ability/?limit=20&offset=20
Limit: 50
Offset: 100
Devuelve: 100 - 150

*/

// Nombre Pokemon
$nombre_pokemon = "bulbasaur";

$url = "https://pokeapi.co/api/v2/pokemon/" . $nombre_pokemon;

// Inicializar CURL
$ch = curl_init();

// Configurar opciones de CURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Ejecutar la solicitud y almacenarla
$response = curl_exec($ch);

// Cerrar la conexión
curl_close($ch);

// echo $response;

$poke_data = json_decode($response, 1);

// echo "<pre>";
// print_r($poke_data);
// echo "</pre>";

echo $poke_data["name"];
echo "<br>";
echo $poke_data["height"];
echo "<br>";
echo "<img src='". $poke_data['sprites']['front_default'] ."'>";
echo "<br>";



