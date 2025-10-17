<?php

declare(strict_types=1);

namespace App\Core\Domain\UseCases;

use App\Core\Domain\Entities\Endereco;
use App\Core\Domain\Entities\Paciente;
use DateTime;

class CriarPaciente
{
    public function execute(
        string $nome,
        string $sobrenome,
        ?string $rg,
        ?string $cpf,
        Endereco $endereco,
        DateTime $data_nascimento,
        string $sexo,
    ): Paciente {
        return new Paciente(
            nome: $nome,
            sobrenome: $sobrenome,
            rg: $rg,
            cpf: $cpf,
            endereco: $endereco,
            sexo: $sexo,
            data_nascimento: $data_nascimento,
        );
    }
}
