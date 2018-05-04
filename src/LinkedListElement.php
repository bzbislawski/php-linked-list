<?php

namespace App;

class LinkedListElement
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getSize()
    {
        return 1;
    }
}
