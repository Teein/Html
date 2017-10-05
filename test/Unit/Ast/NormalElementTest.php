<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Mammalia\Html\Serializer\Attribute;
use Mammalia\Html\Serializer\Element;
use Mammalia\Html\Ast\NormalElement;

class NormalElementTest extends TestCase
{
    public function testToHtml()
    {
        $element = new NormalElement('element', [], []);
        $elementHtml = $element->toHtml();
        $this->assertEquals($elementHtml, '<element></element>');
    }
    
    public function testWithAttributes()
    {
        $attributeStub = $this->createMock(Attribute::class);
        $attributeStub->method('toHtml')->willReturn('attribute="value"');
        $element = new NormalElement('element', [$attributeStub], []);
        $elementHtml = $element->toHtml();
        $this->assertEquals('<element attribute="value"></element>', $elementHtml);
    }

    public function testWithDescendants()
    {
        $childStub = $this->createMock(Element::class);
        $childStub->method('toHtml')->willReturn('<child>');
        $element = new NormalElement('parent', [], [$childStub]);
        $elementHtml = $element->toHtml();
        $this->assertEquals('<parent><child></parent>', $elementHtml);
    }
}
