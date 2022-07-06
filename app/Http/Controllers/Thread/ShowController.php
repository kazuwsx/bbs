<?php

namespace App\Http\Controllers\Thread;

use Illuminate\Http\Request;

use Ddd\Domain\Thread\ValueObject\ThreadTitle;
use App\Http\Controllers\Controller;
use Ddd\Domain\Reply\ValueObject\ReplyComment;
use Ddd\domain\thread\ValueObject\ThreadId;
use Ddd\usecase\thread\ThreadPostUsecase;

class ShowController extends Controller
{
    public function __invoke(Request $request) {
        dd($request);
    }
}
