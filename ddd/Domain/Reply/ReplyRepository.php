<?php

namespace Ddd\domain\reply;

use Ddd\Domain\Reply\ReplyEntity;

interface ReplyRepository
{
    function save(ReplyEntity $thread);

    static function mapRecordToEntity(): ReplyEntity;

    static function mapRecordsToEntity(): Array;
}
