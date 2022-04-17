<?php

namespace App\Http\Controllers\Thread;

use Illuminate\Http\Request;
use Ddd\Domain\Reply\ReplyComment;
use Ddd\Domain\Thread\ThreadTitle;
use App\Http\Controllers\Controller;
use Ddd\usecase\thread\ThreadPostUsecase;

class PostController  extends Controller
{
    public function __invoke(Request $request) {
        $title = new ThreadTitle($request->title);
        $comment = new ReplyComment($request->comment);
        $thread_post_usecase = new ThreadPostUsecase($title, $comment);
        $thread_post_usecase->execute();
    }
}
