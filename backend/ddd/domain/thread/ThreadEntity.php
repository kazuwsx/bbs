<?php

namespace Ddd\Domain\Thread;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Thread\ThreadId;
use Ddd\Domain\Thread\ThreadTitle;
use Ddd\Domain\Thread\ThreadComment;

final class UserEntity {
    private $id;
    private $title;
    private $comment;
    private $user_id;

    private function __construct(
        ThreadId $id,
        ThreadTitle $title,
        ThreadComment $comment,
        UserId $user_id
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->comment = $comment;
        $this->user_id = $user_id;
    }

    static function reconnstruct(
        ThreadId $id,
        ThreadTitle $title,
        ThreadComment $comment,
        UserId $user_id
    ):ThreadEntity {
        $user = new ThreadEntity(
            $id,
            $title,
            $comment,
            $user_id,
        );
        return $user;
    }

    static function create(
        ThreadId $id,
        ThreadTitle $title,
        ThreadComment $comment,
        UserId $user_id
    ): ThreadEntity {
        $user = new ThreadEntity(
            $id,
            $title,
            $comment,
            $user_id,
        );
        return $user;
    }
}
