<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;

use Mammalia\Html\Ast\NormalElement;

class NormalElementTest extends TestCase
{
    public function testToHtml()
    {
        $element = new NormalElement('element', [], []);
        $elementHtml = $element->toHtml();
        $this->assertEquals($elementHtml, '<element></element>');
    }
}
