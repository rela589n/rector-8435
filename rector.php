<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\DeadCode\Rector\StaticCall\RemoveParentCallWithoutParentRector;
use Rector\Privatization\Rector\ClassMethod\PrivatizeFinalClassMethodRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromAssignsRector;
use Rector\ValueObject\PhpVersion;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([__DIR__.'/']);
    $rectorConfig->skip([__DIR__.'/vendor']);

    $rectorConfig->rules([
        TypedPropertyFromAssignsRector::class,
        RemoveParentCallWithoutParentRector::class,
        PrivatizeFinalClassMethodRector::class,
    ]);
    $rectorConfig->phpVersion(PhpVersion::PHP_80);
};
