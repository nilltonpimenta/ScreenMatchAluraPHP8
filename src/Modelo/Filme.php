<?php

class Filme
{
    public string $nome;
    public int $anoLancamento;
    public string $genero;
    private array $notas = [];

    public function avaliar(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        return array_sum($this->notas) / count($this->notas);
    }
}
