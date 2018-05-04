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
}
