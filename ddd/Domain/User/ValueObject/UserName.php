<?php

namespace Ddd\Domain\ValueObject\User;

use Exception;

final class UserName{

    public readonly string $val;

    const MAX_LENGTH = 20;

    public function __construct(string $val) {
        if($val > self::MAX_LENGTH){
            throw new Exception('名前の文字数が20文字以上になっています。');
        }
        $this->val = $val;
    }

    public static function get_validation_rule(): Array {

        $validation_rule = [
            'required'
            ,'string'
            ,'max:' . self::MAX_LENGTH
        ];

        return $validation_rule;
    }
}
