<?php

declare(strict_types=1);

namespace App\Core\Domain\Entities;


/**
 *
 * Entidade Medico extends Funcionario e Pessoa
 *
 * @param string $nome
 * @param string $sobrenome
 * @param string $crm,
 * @param Matricula $matricula
 * @param ?string $cpf
 * @param ?string $rg
 * @param Endereco $endereco
 *
 */

class Medico extends Funcionario
{
    /**
     * Create a Medico
     */
    public function __construct(
        string $nome,
        string $sobrenome,
        public readonly string $crm,
        Matricula $matricula,
        ?string $cpf,
        ?string $rg,
        Endereco $endereco,
    ) 
    {
        parent::__construct(
            nome: $nome,
            sobrenome: $sobrenome,
            matricula: $matricula,
            rg: $rg,
            cpf: $cpf,
            endereco: $endereco,
        );
    }
}
