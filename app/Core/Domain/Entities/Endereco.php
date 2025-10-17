<?php

declare(strict_types=1);

namespace App\Core\Domain\Entities;

class Endereco
{
    public function __construct(
        public readonly string $cep,
        public readonly string $rua
    ) {

    }
}
