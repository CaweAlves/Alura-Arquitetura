<?php

namespace App;

class Aluno
{
    private Cpf $cpf;
    private string $nome;
    private Email $email;
    private array $telefone;

    public function __construct(Cpf $cpf, string $nome, Email $email)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
    }

    public function adicionarTelefone(string $ddd, string $numero)
    {
        $this->telefone[] = new Telefone($ddd, $numero);
    }

}