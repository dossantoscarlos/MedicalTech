<?php

declare(strict_types=1);

use App\Core\Domain\Entities\Matricula;
use App\Core\Domain\UseCases\GerarMatricula;

it('gera matricula automatica baseada em md5', function () {
    $matricula = new GerarMatricula();
    $matricula = $matricula->execute();
    $matriculaGerada = intval(strlen($matricula->getMatricula()));
    expect(Matricula::class)->toBeClass($matricula);
    expect($matriculaGerada)->toBe(15);
});
