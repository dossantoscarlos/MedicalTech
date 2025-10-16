<?php

declare(strict_types=1);

namespace App\Core\Domain\Entities;

class Matricula
{
    private string $matricula;

    /**
     * Create a new class instance.
     */
    public function __construct(string $matricula)
    {
        $this->matricula = $matricula;
    }

    public function getMatricula(): string
    {
        return $this->matricula;
    }
}
