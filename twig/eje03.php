<?php

require_once './vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader);
echo $twig->render('index.html.twig', ['nombre' => $_GET['name']]);
$paises = [
"espana" =>
[
"nombre" => "España",
"lengua" => "Castellano",
"moneda" => "Euro"
],
"usa" =>
[
"nombre" => "USA",
"lengua" => "Inglés",
"moneda" => "Dolar"
]
"francia" =>
[
"nombre" => "Francia",
"lengua" => "Frances",
"moneda" => "Euro"
],
"japon" =>
[
"nombre" => "Japon",
"lengua" => "Japones",
"moneda" => "Yen"
]
"argentina" =>
[
"nombre" => "Argentina",
"lengua" => "Castellano",
"moneda" => "ARS Peso"
],

];

echo $twig->render('index.html.twig', ['paises' => $paises]);
php?>
