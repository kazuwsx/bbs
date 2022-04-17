<?php

namespace Ddd\usecase\thread;

use Ddd\Domain\Reply\ReplyComment;
use Ddd\Domain\Thread\ThreadTitle;



class ThreadPostUsecase
{
    private $title;
    private $comment;

    function __construct(ThreadTitle $title, ReplyComment $comment)
    {
        $this->title = $title;
        $this->comment = $comment;
    }

    function execute()
    {
        dd($this->title, $this->comment);
    }
}
