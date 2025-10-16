<?php

declare(strict_types=1);

use App\Core\Domain\Entities\Endereco;
use App\Core\Domain\Entities\Medico;
use App\Core\Domain\UseCases\CriarMedico;
use App\Core\Domain\UseCases\GerarMatricula;

it('use case de cadastro de medico', function () {
    $matricula = (new GerarMatricula())->execute();

    $endereco = new Endereco(cep:"45778989877", rua: "rua doutor");

    $newMedico = new Medico(
        nome:'carlos eduardo',
        sobrenome:'dos santos',
        crm:'crm',
        matricula:$matricula,
        rg: '193040303',
        cpf:'404033349',
        endereco:$endereco
    );

    $criarMedico = new CriarMedico();

    $medico = $criarMedico->execute(
        nome:$newMedico->nome,
        sobrenome:$newMedico->sobrenome,
        crm: $newMedico->crm,
        matricula:$newMedico->matricula,
        rg: $newMedico->rg,
        cpf: $newMedico->cpf,
        endereco: $newMedico->endereco
    );

    expect(Medico::class)->toBeClass(Medico::class);

    expect($newMedico)->toEqual($medico);

});
