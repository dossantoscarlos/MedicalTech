<?php

declare(strict_types=1);

namespace App\Core\Domain\Entities;

use DateTime;

class Paciente extends Pessoa
{
    /**
     *
     * Create a new class instance.
     */
    public function __construct(
        string $nome,
        string $sobrenome,
        ?string $rg,
        ?string $cpf,
        Endereco $endereco,
        public readonly string $sexo,
        public readonly DateTime $data_nascimento,
    ) {
        parent::__construct(
            nome: $nome,
            sobrenome: $sobrenome,
            rg: $rg,
            cpf: $cpf,
            endereco: $endereco
        );
    }

    public function cep(): string
    {
        return $this->endereco->cep;
    }

    public function rua(): string
    {
        return $this->endereco->rua;
    }
}
