<?php

namespace Ddd\Domain\Thread\ValueObject;

use Exception;

final class ThreadTitle{

    public readonly string $val;

    const MAX_LENGTH = 64;

    public function __construct(string $val) {
        if(strlen($val) >= self::MAX_LENGTH) {
            throw new Exception('最大文字数' . MAX_LENGTH . 'を超えています');
        }
        $this->val = $val;
    }
}
