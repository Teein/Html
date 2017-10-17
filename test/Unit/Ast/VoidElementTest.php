<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Mammalia\Html\Serializer\Attribute;
use Mammalia\Html\Ast\VoidElement;

class VoidElementTest extends TestCase
{
    public function testToHtml()
    {
        $element = new VoidElement('element', []);
        $elementHtml = $element->toHtml();
        $this->assertEquals($elementHtml, '<element>');
    }
    
    public function testWithAttributes()
    {
        $attributeStub = $this->createMock(Attribute::class);
        $attributeStub->method('toHtml')->willReturn('attribute="value"');
        $element = new VoidElement('element', [$attributeStub]);
        $elementHtml = $element->toHtml();
        $this->assertEquals('<element attribute="value">', $elementHtml);
    }

    public function testBeautify ()
    {
        $element = new VoidElement('element', []);
        $beautified = $element->beautify();
        $this->assertEquals($element, $beautified);
    }
}
