<?php

namespace App;

class Indicacao
{
    private Aluno $indicante;
    private Aluno $indicado;

    public function __construct(Aluno $indicante, Aluno $indicado)
    {
        $this->indicante = $indicante;
        $this->indicado = $indicado;
    }
}
