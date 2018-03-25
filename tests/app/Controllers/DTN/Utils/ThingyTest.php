<?php

class ThingyTest extends PHPUnit_Framework_TestCase
{
    private $obj;
    public function setUp() {
        $this->obj = new \Controllers\DTN\Utils\Thingy();
    }
    public function testRenderReturnsHelloWorld()
    {
        $this->assertSame('Hello World', $this->obj->helloWorld());
    }

    public function testUppercaseTest()
    {
        $this->assertSame("MOO COW", $this->obj->uppercase("moo cow"));
        $this->assertSame("ABC123", $this->obj->uppercase("abc123"));
        $this->assertSame("THIS IS A TEST!!", $this->obj->uppercase("This Is a Test!!"));
        $this->assertEquals(12345, $this->obj->uppercase("12345"));
    }
}