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
        public readonly string $nome,
        public readonly string $sobrenome,
        public readonly ?string $rg,
        public readonly ?string $cpf,
        public readonly Endereco $endereco,
        public readonly string $sexo,
        public readonly DateTime $data_nascimento,
    ) {
        parent::__construct(
            $this->nome,
            $this->sobrenome,
            $this->rg,
            $this->cpf,
            $this->endereco
        );
    }
}
