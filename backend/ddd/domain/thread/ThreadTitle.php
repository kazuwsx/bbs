<?php

namespace Ddd\Domain\Thread;

use Exception;

final class ThreadTitle{

    private $value;

    const MAX_LENGTH = 64;

    public function __construct(string $value) {
        if(strlen($value) >= self::MAX_LENGTH) {
            throw new Exception('最大文字数' . MAX_LENGTH . 'を超えています');
        }
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
