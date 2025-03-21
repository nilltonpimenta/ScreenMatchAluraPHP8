<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao Screen match!\n";

$filme = new Filme("Thor: Ragnarok", 2021, "super-herói");

$filme->avaliar(10);
$filme->avaliar(10);
$filme->avaliar(5);
$filme->avaliar(5);

var_dump($filme);

echo "A média é: " . $filme->media() . "\n";
echo "O ano é: " . $filme->anoLancamento . "\n";
