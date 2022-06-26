<?php

namespace Ddd\Domain\User;

use Ddd\Domain\ValueObject\User\UserEmail;
use Ddd\Domain\ValueObject\User\UserId;
use Ddd\Domain\ValueObject\User\UserName;

final class UserEntity {
    private $id;
    private $name;
    private $email;

    private function __construct(
        UserId $id,
        UserName $name,
        UserEmail $email
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    static function reconnstruct(
        UserId $id,
        UserName $name,
        UserEmail $email
    ):UserEntity {
        $user = new UserEntity(
            $id,
            $name,
            $email
        );
        return $user;
    }

    static function create(
        UserId $id,
        UserName $name,
        UserEmail $email
    ): UserEntity {
        $user = new UserEntity(
            $id,
            $name,
            $email
        );
        return $user;
    }
}
