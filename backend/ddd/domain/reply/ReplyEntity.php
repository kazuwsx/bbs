<?php

namespace Ddd\Domain\Reply;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Reply\ReplyId;
use Ddd\Domain\Thread\ThreadId;
use Ddd\Domain\Reply\ReplyComment;

final class ReplyEntity {
    private $id;
    private $comment;
    private $user_id;
    private $thread_id;

    private function __construct(
        ReplyId $id,
        ReplyComment $comment,
        UserId $user_id,
        ThreadId $thread_id
    )
    {
        $this->id = $id;
        $this->comment = $comment;
        $this->user_id = $user_id;
        $this->thread_id = $thread_id;
    }

    static function reconnstruct(
        ReplyId $id,
        ReplyComment $comment,
        UserId $user_id,
        ThreadId $thread_id
    ):ReplyEntity {
        $user = new ReplyEntity(
            $id,
            $comment,
            $user_id,
            $thread_id,
        );
        return $user;
    }

    static function create(
        ReplyId $id,
        ReplyComment $comment,
        UserId $user_id,
        ThreadId $thread_id
    ): ReplyEntity {
        $user = new ReplyEntity(
            $id,
            $comment,
            $user_id,
            $thread_id,
        );
        return $user;
    }
}
