<?php

require_once __DIR__ . '/../ToolsObjectBox.php';
 
class ToolsObjectBoxTest extends PHPUnit_Framework_TestCase {
 
    function testItCanWrap() {
        $wordwrap = new ToolsObjectBox();
 
        $this->assertEquals('', $wordwrap->wrap(null, 0));
        $this->assertEquals('', $wordwrap->wrap('', 0));
        $this->assertEquals('a', $wordwrap->wrap('a', 1));
        $this->assertEquals("a\nb", $wordwrap->wrap('a b', 1));
        $this->assertEquals("a b\nc", $wordwrap->wrap('a b c', 3));
        $this->assertEquals("a\nbc\nd", $wordwrap->wrap('a bc d', 3));
    }
}

?>