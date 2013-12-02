<?php
include_once 'hammer.php';

class InTest extends PHPUnit_Framework_TestCase
{
    protected $parser;

    protected function setUp()
    {
        $this->parser = h_in("abc");
    }
    public function testSuccess()
    {
        $result = h_parse($this->parser, "b");
        // TODO: fixme when h_ch is fixed
        $this->assertEquals(98, $result);
    }
    public function testFailure()
    {
        $result = h_parse($this->parser, "d");
        $this->assertEquals(NULL, $result);
    }
}
?>