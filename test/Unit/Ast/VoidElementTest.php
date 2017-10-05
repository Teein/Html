<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;

use Mammalia\Html\Ast\VoidElement;

class VoidElementTest extends TestCase
{
    public function testToHtml()
    {
        $element = new VoidElement('element', []);
        $elementHtml = $element->toHtml();
        $this->assertEquals($elementHtml, '<element>');
    }
}
