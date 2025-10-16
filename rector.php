<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/bootstrap',
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/resources',
        __DIR__ . '/routes',
        __DIR__ . '/database',
        __DIR__ . '/tests',
    ])
    ->withSets([
        LaravelSetList::LARAVEL_CODE_QUALITY,
        LaravelSetList::LARAVEL_COLLECTION,
    ])
    ->withPhpSets()
    ->withPreparedSets(
        deadCode: true,
        codeQuality:true,
        codingStyle:true,
        typeDeclarations:true,
        privatization:true,
        naming:true,
        instanceOf:true,
        earlyReturn:true,
        strictBooleans:true,
        rectorPreset:true,
    );
