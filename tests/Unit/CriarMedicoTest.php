<?php

declare(strict_types=1);

use App\Core\Domain\Entities\Endereco;
use App\Core\Domain\Entities\Medico;
use App\Core\Domain\UseCases\CriarMedico;
use App\Core\Domain\UseCases\GerarMatricula;

it('use case de cadastro de medico', function (): void {
    $matricula = (new GerarMatricula())->execute();

    $endereco = new Endereco(cep:'45778989877', rua: 'rua doutor');

    $newMedico = new Medico(
        nome:'carlos eduardo',
        sobrenome:'dos santos',
        crm:'crm',
        matricula:$matricula,
        cpf:'404033349',
        rg: '193040303',
        endereco:$endereco
    );

    $criarMedico = new CriarMedico();

    $medico = $criarMedico->execute(
        nome:$newMedico->nome,
        sobrenome:$newMedico->sobrenome,
        cpf: $newMedico->cpf,
        rg: $newMedico->rg,
        matricula:$newMedico->matricula,
        endereco: $newMedico->endereco,
        crm: $newMedico->crm
    );

    expect(Medico::class)->toBeClass();

    expect($newMedico)->toEqual($medico);

});
