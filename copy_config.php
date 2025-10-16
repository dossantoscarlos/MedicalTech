<?php

declare(strict_types=1);

/**
 * CP Config
 * @description: This file is used to configure the CP.
 * @version: 1.0.0
 * @author: Carlos Eduardo(Cadu: anjoazrael10@gmail.com)
 * @date: 2025-07-05
 * @version: 1.0.0
 */

function main(): string
{
    $local_path = '../api_cenaculo_events/';
    $arquivos = [
        'rector.php',
        'phpstan.neon',
        'pint.json',
        'peck.json',
    ];
    $status = intval(0);
    $result = strval('');

    foreach ($arquivos as $arquivo) {
        exec("cp {$local_path}{$arquivo} {$arquivo}", $result, $status);
    }

    return $status == 0
        ? "\nCopiado com sucesso.\n".PHP_EOL
        : "\nerror ao copiar arquivo.\n".PHP_EOL;
}

$exec = main();

print($exec);
