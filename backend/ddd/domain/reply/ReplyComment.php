<?php

namespace Ddd\Domain\Reply;

final class ReplyComment{

    private $value;

    const MAX_LENGTH = 140;

    public function __construct(string $value) {
        if(length($value) >= MAX_LENGTH){
            throw new Exception('最大文字数' . MAX_LENGTH . 'を超えています');
        }
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
