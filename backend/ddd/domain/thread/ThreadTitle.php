<?php

namespace Ddd\Domain\Thread;

use Exception;

final class UserId{

    private $value;

    const MAX_LENGTH = 50;

    public function __construct(int $value) {
        if(MAX_LENGTH >= 50) {
            throw new Exception('最大文字数' . MAX_LENGTH . 'を超えています');
        }
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
