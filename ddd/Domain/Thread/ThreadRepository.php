<?php

namespace Ddd\domain\thread;

use Ddd\Domain\Thread\ThreadEntity;

interface ThreadRepository
{
    static function save(ThreadEntity $thread);

    static function selectAllOrderByCreatedAtLimit10();

    static function mapRecordToEntity(): ThreadEntity;

    static function mapRecordsToEntity(): Array;
}
