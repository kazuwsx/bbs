<?php

namespace Ddd\Infrastructure\FacadesDb;

use Carbon\Carbon;
use Ddd\Domain\Reply\ReplyEntity;
use Illuminate\Support\Facades\DB;

class ReplyFacadesDbRepository
{
    static function save(ReplyEntity $reply)
    {
        DB::table('replies')->insert([
            'id' => $reply->getId()->val,
            'comment' => $reply->getComment()->val,
            'user_id' => $reply->getUserId()->val,
            'thread_id' => $reply->getThreadId()->val,
            "created_at" =>  Carbon::now(),
            "updated_at" =>  Carbon::now(),
        ]);
    }

    // static function mapRecordToEntity(): ReplyEntity
    // {

    // }

    // static function mapRecordsToEntity(): Array
    // {

    // }
}
