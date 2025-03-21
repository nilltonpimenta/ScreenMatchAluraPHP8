<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";

echo "Bem-vindo(a) ao Screen match!\n";

$filme = new Filme("Thor: Ragnarok", 2017, Genero::SuperHeroi, 120);

$filme->avaliar(10);
$filme->avaliar(10);
$filme->avaliar(5);
$filme->avaliar(5);

var_dump($filme);

echo "A média de " . $filme->nome . " é: " . $filme->media() . "\n";
echo "O ano de " . $filme->nome . " é: " . $filme->anoLancamento . "\n\n";

$serie = new Serie("Lost", 2007, Genero::Drama, 10, 20, 30);

echo "O ano de " . $serie->nome . " é: " . $serie->anoLancamento . "\n";

$serie->avaliar(8.5);
$serie->avaliar(10);

echo "A média de " . $serie->nome . " é: " . $serie->media() . "\n";
