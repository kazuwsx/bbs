<?php

namespace Ddd\domain\thread;

use Ddd\Domain\Thread\Thread;

interface ThreadRepository
{
    function save(Thread $thread);
}
