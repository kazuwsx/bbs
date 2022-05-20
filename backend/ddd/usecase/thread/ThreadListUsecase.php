<?php

namespace Ddd\usecase\thread;

use Ddd\infrastructure\eloquent\ThreadEloquentRepository;

class ThreadListUsecase
{

    function execute()
    {
        $thread_entities = ThreadEloquentRepository::selectAllOrderByCreatedAtLimit10();
        dd($thread_entities);
        return 0;
    }
}
