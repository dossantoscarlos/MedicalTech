<?php

declare(strict_types=1);

namespace App\Core\Domain\Entities;

class Matricula
{
    /**
     * Create a new class instance.
     */
    public function __construct(private readonly string $matricula)
    {
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }
}
