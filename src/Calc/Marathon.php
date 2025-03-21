<?php

class MarathonCalc
{
    private int $duracaoMarathon = 0;

    public function add(Titulo $titulo): void
    {
        $this->duracaoMarathon += $titulo->duracaoEmMinutos();
    }

    public function duracao(): int
    {
        return $this->duracaoMarathon;
    }
}
