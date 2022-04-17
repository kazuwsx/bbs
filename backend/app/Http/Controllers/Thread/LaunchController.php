<?php

namespace App\Http\Controllers\Thread;

use App\Http\Controllers\Controller;

class LaunchController  extends Controller
{
    public function __invoke() {
        return view('thread.Launch');
    }
}
