<?php

declare(strict_types=1);

namespace App\Core\Domain\UseCases;

use App\Core\Domain\Entities\Matricula;

class GerarMatricula
{
    public function execute(): Matricula
    {
        $date = date('Y-m-d:HH:MM:s');
        $matricula = strval(hash('md5', $date));
        $count = strlen($matricula);
        $matricula = substr($matricula, ($count - 17), 15);
        return new Matricula($matricula);
    }
}
