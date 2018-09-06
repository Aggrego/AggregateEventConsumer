<?php

declare(strict_types = 1);

namespace Aggrego\EventStore;

use ArrayIterator;
use Iterator;
use IteratorAggregate;

class Events implements IteratorAggregate
{
    /** @var array */
    private $list;

    public function __construct()
    {
        $this->list = [];
    }

    public function add(Event $event)
    {
        $this->list[] = $event;
    }

    public function getIterator(): Iterator
    {
        return new ArrayIterator($this->list);
    }
}
