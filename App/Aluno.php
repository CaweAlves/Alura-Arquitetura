<?php

namespace App;

class Aluno
{
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private array $telefone;

    public function adicionarTelefone(string $ddd, string $numero)
    {
        $this->telefone[] = new Telefone($ddd, $numero);
    }

}