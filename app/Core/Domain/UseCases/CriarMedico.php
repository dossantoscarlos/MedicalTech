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
            crm: $crm,
            matricula: $matricula,
            cpf:$cpf,
            rg:$rg,
            endereco: $endereco
        );
    }
}
