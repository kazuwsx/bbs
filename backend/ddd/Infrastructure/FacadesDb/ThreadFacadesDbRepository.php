<?php

namespace Ddd\Infrastructure\FacadesDb;

use Carbon\Carbon;
use Ddd\Domain\Thread\ThreadEntity;
use Ddd\Domain\Thread\ValueObject\ThreadId;
use Ddd\Domain\Thread\ValueObject\ThreadTitle;
use Ddd\Domain\User\UserId;
use Illuminate\Support\Facades\DB;

class ThreadFacadesDbRepository
{
    static function save(ThreadEntity $thread)
    {
        DB::table('threads')->insert([
            'id' => $thread->getId()->getValue(),
            'title' => $thread->getTitle()->getValue(),
            'user_id' => $thread->getUserId()->getValue(),
            "created_at" =>  Carbon::now(),
            "updated_at" =>  Carbon::now(),
        ]);
    }

    static function selectAllOrderByCreatedAtLimit10()
    {
        $thread_records = DB::table('threads')
            ->orderByDesc('created_at')
            ->limit(10)
            ->get();

        $thread_entities = self::mapRecordsToEntity($thread_records);

        return $thread_entities;
    }

    private static function mapRecordToEntity($thread_record): ThreadEntity
    {
        return ThreadEntity::reconnstruct(
            new ThreadId($thread_record->id),
            new ThreadTitle($thread_record->title),
            new UserId($thread_record->user_id),
        );
    }

    private static function mapRecordsToEntity($thread_records): Array
    {
        $thread_entities = [];

        foreach($thread_records as $thread_record)
        {
            array_push($thread_entities, self::mapRecordToEntity($thread_record));
        }

        return $thread_entities;
    }
}
