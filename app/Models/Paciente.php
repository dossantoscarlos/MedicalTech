<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $tables = 'pacientes';
    protected $fillable = [
        'nome', 'sobrenome', 'sexo', 'data_nascimento',
        ''
    ];
}
