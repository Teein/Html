<?php

use PHPUnit\Framework\TestCase;
use Mammalia\Html\Ast\EscapableRawTextElement;

use function Mammalia\Html\title;

class EscapableRawTextElementTest extends TestCase
{
    public function testToHtml()
    {
        $title = title ()('Hello, World!');
        $titleHtml = $title->toHtml();
        $this->assertEquals($titleHtml, '<title>Hello, World!</title>');

        $titleWithAmpersand = title ()('Hello, World & Mars!');
        $titleWithAmpersandHtml = $titleWithAmpersand->toHtml();
        $this->assertEquals($titleWithAmpersand, '<title>Hello, World &amp; Mars!</title>');
    }
}
