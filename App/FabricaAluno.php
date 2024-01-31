<?php

namespace App;

class FabricaAluno
{
    private Aluno $aluno;

    public function comCpfEmailENome(string $cpf, string $email, string $nome): self
    {
        $this->aluno = new Aluno(new Cpf($cpf), $nome, new Email($email));
        return $this;
    }

    public function adicionarTelefone(string $ddd, string $numero): self
    {
        $this->aluno->adicionarTelefone($ddd, $numero);
        return $this;
    }

}