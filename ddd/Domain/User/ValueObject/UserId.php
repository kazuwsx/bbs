<?php

namespace Ddd\Domain\User\ValueObject;

final class UserId{

    public readonly int $val;

    public function __construct(int $val) {
        $this->val = $val;
    }
}
