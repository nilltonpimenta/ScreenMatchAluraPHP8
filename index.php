<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao Screen match!\n";

$filme = new Filme();
$filme->nome = "Thor: Ragnarok";
$filme->anoLancamento = 2021;
$filme->nota = 7.2;
$filme->genero = "super-herói";

$filme->avaliar(10);
$filme->avaliar(10);
$filme->avaliar(5);
$filme->avaliar(5);

var_dump($filme);

echo "A média é: " . $filme->media();
