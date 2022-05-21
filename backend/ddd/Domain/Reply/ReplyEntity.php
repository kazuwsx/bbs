<?php

namespace Ddd\Domain\Reply;

use Ddd\Domain\Reply\ValueObject\ReplyComment;
use Ddd\Domain\Reply\ValueObject\ReplyId;
use Ddd\Domain\User\UserId;
use Ddd\Domain\Thread\ValueObject\ThreadId;

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

    public function getId(): ReplyId
    {
        return $this->id;
    }

    public function getComment(): ReplyComment
    {
        return $this->comment;
    }

    public function getUserId(): UserId
    {
        return $this->user_id;
    }

    public function getThreadId(): ThreadId
    {
        return $this->thread_id;
    }
}
