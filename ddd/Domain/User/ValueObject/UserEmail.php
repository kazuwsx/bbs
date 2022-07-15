<?php

namespace Ddd\Domain\ValueObject\User;

use Exception;

final class UserEmail{

    public readonly string $val;

    const MAX_LENGTH = 255;

    public function __construct(string $val) {
        if($val > self::MAX_LENGTH){
            throw new Exception('メールアドレスの文字数が255文字以上になっています。');
        }
        $this->val = $val;
    }

    public static function get_validation_rule(): Array {

        $validation_rule = [
            'required'
            ,'string'
            ,'email:rfc,dns,strict,spoof'
            ,'max:' . self::MAX_LENGTH
            ,'unique:users'
    ];

        return $validation_rule;
    }
}
