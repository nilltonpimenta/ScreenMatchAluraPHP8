<?php

class Filme
{
    public string $nome;
    private int $anoLancamento;
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

    public function getAnoLancamento(): int
    {
        return $this->anoLancamento;
    }

    public function setAnoLancamento(int $ano): void
    {
        $this->anoLancamento = $ano;
    }
}
