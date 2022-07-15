<?php

namespace Ddd\Domain\Thread;


use Ddd\Domain\Thread\ValueObject\ThreadId;
use Ddd\Domain\Thread\ValueObject\ThreadTitle;
use Ddd\Domain\User\ValueObject\UserId;

final class ThreadEntity {
    private ThreadId $id;
    private ThreadTitle $title;
    private UserId $user_id;

    private function __construct(
        ThreadId $id,
        ThreadTitle $title,
        UserId $user_id
    )
    {
        $this->id = $id;
        $this->title = $title;
        $this->user_id = $user_id;
    }

    static function reconnstruct(
        ThreadId $id,
        ThreadTitle $title,
        UserId $user_id
    ):ThreadEntity {
        $user = new ThreadEntity(
            $id,
            $title,
            $user_id,
        );
        return $user;
    }

    static function create(
        ThreadId $id,
        ThreadTitle $title,
        UserId $user_id
    ): ThreadEntity {
        $user = new ThreadEntity(
            $id,
            $title,
            $user_id,
        );
        return $user;
    }

    public function getId(): ThreadId
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getUserId()
    {
        return $this->user_id;
    }
}
