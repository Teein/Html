<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Mammalia\Html\Serializer\Attribute;
use Mammalia\Html\Serializer\Text;
use Mammalia\Html\Ast\TextElement;

class TextElementTest extends TestCase
{
    public function testToHtml()
    {
        $textStub = $this->createMock(Text::class);
        $textStub->method('toHtml')->willReturn('');
        $element = new TextElement('element', [], $textStub);
        $elementHtml = $element->toHtml();
        $this->assertEquals($elementHtml, '<element></element>');
    }
    
    public function testWithAttributes()
    {
        $textStub = $this->createMock(Text::class);
        $textStub->method('toHtml')->willReturn('');
        $attributeStub = $this->createMock(Attribute::class);
        $attributeStub->method('toHtml')->willReturn('attribute="value"');
        $element = new TextElement('element', [$attributeStub], $textStub);
        $elementHtml = $element->toHtml();
        $this->assertEquals('<element attribute="value"></element>', $elementHtml);
    }

    public function testBeautify ()
    {
        $textStub = $this->createMock(Text::class);
        $textStub->method('toRawText')->willReturn('');
        $element = new TextElement('element', [], $textStub);
        $beautified = $element->beautify();
        $this->assertEquals($element, $beautified);
    }
}
