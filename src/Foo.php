<?php

declare(strict_types=1);

namespace Rela589n\Rector8435;

final class Foo
{
    private int $i;

    public function __construct(int $i)
    {
        $this->i = $i;
    }

    public function getI(): int
    {
        return $this->i;
    }
}
