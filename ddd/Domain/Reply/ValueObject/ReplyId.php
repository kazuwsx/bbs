<?php

namespace Ddd\Domain\Reply\ValueObject;

use Ramsey\Uuid\Uuid;

final class ReplyId{

    public readonly string $val;

    const MAX_LENGTH = 36;

    public function __construct(string $val) {
        if(strlen($val) > self::MAX_LENGTH) {
            throw new Exception('最大文字数' . self::MAX_LENGTH . 'を超えています');
        }
        $this->val = $val;
    }

    public static function create() {
        return new self(Uuid::uuid1());
    }
}
