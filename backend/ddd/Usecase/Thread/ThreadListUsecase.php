<?php

namespace Ddd\usecase\thread;

use Ddd\Domain\Thread\ThreadEntity;
use Ddd\Infrastructure\FacadesDb\ThreadFacadesDbRepository;

class ThreadListUsecase
{

    function execute()
    {
        $thread_entities = ThreadFacadesDbRepository::selectAllOrderByCreatedAtLimit10();
        $threads = [];
        foreach($thread_entities as $thread_entity){
            array_push($threads, new ThreadListDto($thread_entity));
        }
        return $threads;
    }
}

class ThreadListDto
{
    public $id;
    public $title;
    public $user_id;

    function __construct(ThreadEntity $thread)
    {
        $this->id = $thread->getId();
        $this->title = $thread->getTitle();
        $this->user_id = $thread->getUserId();
    }
}
