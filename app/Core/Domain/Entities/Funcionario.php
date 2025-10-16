<?php

declare(strict_types=1);

namespace App\Core\Domain\Entities;

class Funcionario extends Pessoa
{
    /**
     * Create a new class instance.
     */
    public function __construct(
         string $nome,
         string $sobrenome,
         public readonly Matricula $matricula,
         Endereco $endereco,
         ?string $rg,
         ?string $cpf,
    ) {
        parent::__construct(
            nome: $nome,
            sobrenome: $sobrenome,
            cpf: $cpf,
            rg: $rg,
            endereco: $endereco,
        );
    }

    public function matricula() : string
    {
        return $this->matricula->getMatricula();
    }
}
