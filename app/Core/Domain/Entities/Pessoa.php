<?php

declare(strict_types=1);

namespace App\Core\Domain\Entities;

class Pessoa
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public readonly string $nome,
        public readonly string $sobrenome,
        public readonly ?string $cpf,
        public readonly ?string $rg,
        public readonly Endereco $endereco,
    ) {

    }
}
