<?php
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }
    public function testAddition(){
        $this->assertSame(15 + 5, 20);
    }
}