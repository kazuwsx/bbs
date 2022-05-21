<?php

namespace Ddd\Domain\User;

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
