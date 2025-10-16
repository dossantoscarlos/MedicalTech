<?php

declare(strict_types=1);

namespace App\Core\Domain\UseCases;

use App\Core\Domain\Entities\Endereco;
use App\Core\Domain\Entities\Matricula;
use App\Core\Domain\Entities\Medico;

class CriarMedico
{
    public function execute(
        string $nome,
        string $sobrenome,
        ?string $cpf,
        ?string $rg,
        Matricula $matricula,
        Endereco $endereco,
        string $crm,
    ): Medico {

        return new Medico(
            nome:$nome,
            sobrenome:$sobrenome,
            cpf:$cpf,
            rg:$rg,
            endereco: $endereco,
            matricula: $matricula,
            crm: $crm
        );
    }
}
