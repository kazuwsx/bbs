<?php

namespace Ddd\Domain\Thread;

final class UserId{

    private $value;

    public function __construct(int $value) {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
