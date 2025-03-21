<?php

class Filme
{
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly string $genero
    ) {
        $this->notas = [];
    }

    public function avaliar(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        return array_sum($this->notas) / count($this->notas);
    }
}
