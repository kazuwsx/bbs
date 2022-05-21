<?php

namespace Ddd\usecase\thread;

use Ddd\Infrastructure\FacadesDb\ThreadFacadesDbRepository;

class ThreadListUsecase
{

    function execute()
    {
        $thread_entities = ThreadFacadesDbRepository::selectAllOrderByCreatedAtLimit10();
        $threads = new ThreadListDto($thread_entities);
        // $threads = [];
        // foreach($thread_entities as $thread_entity){
        //     array_push($threads, );
        // }
        return $threads;
    }
}

class ThreadListDto
{
    private $id;
    private $title;
    private $user_id;

    function __construct(ThreadEntity $thread)
    {
        $this->id = $thread->getId();
        $this->title = $thread->getTitle();
        $this->user_id = $thread->getUserId();
    }
}
