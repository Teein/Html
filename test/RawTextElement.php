<?php

use PHPUnit\Framework\TestCase;
use Mammalia\Html\Ast\RawTextElement;

use function Mammalia\Html\script;

class RawTextElementTest extends TestCase
{
    public function testToHtml()
    {
        $script = script ()('console.log("Hello, World!");');
        $scriptHtml = $scritp->toHtml();
        $this->assertEquals($scriptHtml, '<script>console.log("Hello, World!");</script>');

        $scriptWithAmpersand = script ()('console.log("Hello, World & Mars!");');
        $scritpWithAmpersandHtml = $titleWithAmpersand->toHtml();
        $this->assertEquals($titleWithAmpersand, '<script>console.log("Hello, World & Mars!");</script>');
    }
}
