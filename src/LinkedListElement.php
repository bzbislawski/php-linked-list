<?php

namespace App;

class LinkedListElement
{
    private $content;
    private $next = null;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getSize()
    {
        while ($this->next != null) {
            return $this->next->getSize() + 1;
        }
        return 1;
    }

    public function linkNextTo(LinkedListElement $element2)
    {
        $this->next = $element2;
    }
}
