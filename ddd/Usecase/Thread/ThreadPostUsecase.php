<?php

namespace Ddd\usecase\thread;




use Ddd\Domain\Reply\ReplyEntity;
use Ddd\Domain\Reply\ValueObject\ReplyComment;
use Ddd\Domain\Reply\ValueObject\ReplyId;
use Ddd\Domain\Thread\ThreadEntity;
use Ddd\Domain\Thread\ValueObject\ThreadId;
use Ddd\Domain\Thread\ValueObject\ThreadTitle;
use Ddd\Domain\User\ValueObject\UserId;
use Illuminate\Support\Facades\Auth;
use Ddd\Infrastructure\FacadesDb\ReplyFacadesDbRepository;
use Ddd\Infrastructure\FacadesDb\ThreadFacadesDbRepository;
use Illuminate\Support\Facades\DB;

class ThreadPostUsecase
{
    private $thread_id;
    private $title;
    private $comment;
    private $user_id;
    private $reply_id;

    function __construct(ThreadTitle $title, ReplyComment $comment)
    {
        $this->thread_id = ThreadId::create();
        $this->title = $title;
        $this->comment = $comment;
        $this->user_id = new UserId(Auth::id());
        $this->reply_id = ReplyId::create();
    }

    function execute(): ThreadId
    {
        $thread = ThreadEntity::create(
            $this->thread_id,
            $this->title,
            $this->user_id,
        );

        $reply = ReplyEntity::create(
            $this->reply_id,
            $this->comment,
            $this->user_id,
            $this->thread_id,
        );

        DB::transaction(function () use($thread, $reply) {
            ThreadFacadesDbRepository::save($thread);
            ReplyFacadesDbRepository::save($reply);
        });

        return $thread->getId();
    }
}
