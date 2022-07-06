<?php

namespace App\Http\Controllers\Reply;

use App\Http\Controllers\Controller;

class PostController  extends Controller
{
    public function __invoke() {
        return view('reply.post');
    }
}
