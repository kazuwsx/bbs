<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\Controller;
use Ddd\usecase\thread\ThreadListUsecase;

class IndexController extends Controller
{
    public function __invoke() {
        $thread_list_usecase = new ThreadListUsecase();
        $threads = $thread_list_usecase->execute();
        $res['threads'] = $threads;

        return view('thread.index', $res);
    }
}
