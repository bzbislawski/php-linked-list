<?php
namespace Test;

use App\LinkedListElement;
use PHPUnit\Framework\TestCase;

class LinkedListTest extends TestCase
{
    public function testGivenListHaveOneElement()
    {
        $element = new LinkedListElement("One");
        $this->assertEquals(1, $element->getSize());
    }

    public function testGivenListHaveTwoElements()
    {
        $element = new LinkedListElement("One");
        $element2 = new LinkedListElement("Two");
        $element->linkNextTo($element2);

        $this->assertEquals(2, $element->getSize());
    }
}
