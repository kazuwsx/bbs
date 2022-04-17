<?php

namespace Ddd\infrastructure\eloquent;

use Carbon\Carbon;
use Ddd\Domain\Thread\Thread;
use Illuminate\Support\Facades\DB;

class ThreadEloquentRepository
{
    static function save(Thread $thread)
    {
        DB::table('threads')->insert([
            'id' => $thread->getId()->getValue(),
            'title' => $thread->getTitle()->getValue(),
            'user_id' => $thread->getUserId()->getValue(),
            "created_at" =>  Carbon::now(),
            "updated_at" =>  Carbon::now(),
        ]);
    }
}
