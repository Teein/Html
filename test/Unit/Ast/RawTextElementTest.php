<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Mammalia\Html\VirtualDom\Attribute;
use Mammalia\Html\VirtualDom\Text;
use Mammalia\Html\Ast\RawTextElement;

class RawTextElementTest extends TestCase
{
    public function testToHtml()
    {
        $textStub = $this->createMock(Text::class);
        $textStub->method('toRawText')->willReturn('');
        $element = new RawTextElement('element', [], $textStub);
        $elementHtml = $element->toHtml();
        $this->assertEquals('<element></element>', $elementHtml);
    }

    public function testWithAttributes()
    {
        $textStub = $this->createMock(Text::class);
        $textStub->method('toRawText')->willReturn('');
        $attributeStub = $this->createMock(Attribute::class);
        $attributeStub->method('toHtml')->willReturn('attribute="value"');
        $element = new RawTextElement('element', [$attributeStub], $textStub);
        $elementHtml = $element->toHtml();
        $this->assertEquals('<element attribute="value"></element>', $elementHtml);
    }

    public function testBeautify ()
    {
        $textStub = $this->createMock(Text::class);
        $textStub->method('toRawText')->willReturn('');
        $element = new RawTextElement('element', [], $textStub);
        $beautified = $element->beautify();
        $this->assertEquals($element, $beautified);
    }
}
