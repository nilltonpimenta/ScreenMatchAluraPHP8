<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/functions.php";

echo "Bem-vindo(a) ao Screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
    //$notas[] e $notas[$contador - 1] é a msm coisa, nesse caso, se o Array estiver vazio por adiciona sempre no final
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: $nomeFilme\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "Gênero não encontrado.",
};


echo "O gênero do filme é: $genero\n";

$filme = criaFilme(
    nome: "Thor: Ragnarok",
    anoLancamento: 2021,
    nota: 7.8,
    genero: "super-herói"
);

echo $filme->anoLancamento;

$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);

var_dump($filmeComoStringJson);
