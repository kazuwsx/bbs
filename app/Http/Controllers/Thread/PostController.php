<?php

namespace App\Http\Controllers\Thread;

use Illuminate\Http\Request;

use Ddd\Domain\Thread\ValueObject\ThreadTitle;
use App\Http\Controllers\Controller;
use Ddd\Domain\Reply\ValueObject\ReplyComment;
use Ddd\usecase\thread\ThreadPostUsecase;

class PostController extends Controller
{
    public function __invoke(Request $request) {
        $thread_post_usecase = new ThreadPostUsecase($request->title, $request->comment);
        $thread_id = $thread_post_usecase->execute();
        $res['thread_id'] = $thread_id->val;
        return view('thread.posted', $res);
    }
}
