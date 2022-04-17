<?php

namespace Ddd\usecase\thread;

use Ddd\Domain\User\UserId;
use Ddd\Domain\Thread\Thread;
use Ddd\Domain\Thread\ThreadId;
use Ddd\Domain\Reply\ReplyComment;
use Ddd\Domain\Thread\ThreadTitle;
use Illuminate\Support\Facades\Auth;
use Ddd\infrastructure\eloquent\ThreadEloquentRepository;

class ThreadPostUsecase
{
    private $thread_id;
    private $title;
    private $comment;
    private $user_id;

    function __construct(ThreadTitle $title, ReplyComment $comment)
    {
        $this->thread_id = ThreadId::create();
        $this->title = $title;
        $this->comment = $comment;
        $this->user_id = new UserId(Auth::id());
    }

    function execute()
    {
        $thread = Thread::create(
            $this->thread_id,
            $this->title,
            $this->comment,
            $this->user_id,
        );
        ThreadEloquentRepository::save($thread);

    }
}
