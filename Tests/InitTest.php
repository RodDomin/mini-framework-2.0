<?php
use PHPUnit\Framework\TestCase;

class InitTest extends TestCase {
    public function testMyFirst()
    {
        $arr = [];

        $this->assertEmpty($arr);
    }

    public function testMySecond()
    {
        $this->assertEquals(true, true);
    }
}