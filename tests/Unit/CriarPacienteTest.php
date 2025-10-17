<?php

declare(strict_types=1);


use App\Core\Domain\Entities\Endereco;
use App\Core\Domain\Entities\Paciente;
use App\Core\Domain\UseCases\CriarPaciente;

it('use case criar paciente', function () {

    $aniversario = '1991-04-10';
    $data = new DateTime($aniversario);
    $data->format('Y-m-d');

    $endereco = new Endereco(cep: '334343131', rua:'rua doutor renato');

    $newPaciente = new Paciente(
        nome: 'Carlos Eduardo',
        sobrenome: 'dos Santos',
        rg: '948494',
        cpf: '404353053',
        endereco: $endereco,
        sexo: 'M',
        data_nascimento: $data
    );

    $criarPaciente = new CriarPaciente();

    $paciente = $criarPaciente->execute(
        nome: $newPaciente->nome,
        sobrenome: $newPaciente->sobrenome,
        rg:$newPaciente->rg,
        cpf:$newPaciente->cpf,
        endereco: $newPaciente->endereco,
        sexo: $newPaciente->sexo,
        data_nascimento: $newPaciente->data_nascimento
    );

    expect(Paciente::class)->toBeClass($paciente);

    expect($newPaciente)->toEqual($paciente);
});
