<?php

namespace Ddd\Domain\Thread;

use Exception;
use Ramsey\Uuid\Uuid;

final class ThreadId{

    private $value;

    const MAX_LENGTH = 36;

    public function __construct(string $value) {
        if(strlen($value) > self::MAX_LENGTH) {
            throw new Exception('最大文字数' . self::MAX_LENGTH . 'を超えています');
        }
        $this->value = $value;
    }

    public static function create() {
        return new ThreadId(Uuid::uuid1());
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
