<?php

namespace Ddd\Domain\ValueObject\User;

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
