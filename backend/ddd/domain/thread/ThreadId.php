<?php

namespace Ddd\Domain\Thread;

use Ramsey\Uuid\Uuid;

final class ThreadId{

    private $value;

    public function __construct(string $value) {
        $this->value = $value;
    }

    public static function create() {
        return new ThreadId(Uuid::uuid1());
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
