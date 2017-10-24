<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Teein\Html\VirtualDom\Attribute;
use Teein\Html\Ast\VoidElement;

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

    public function testGetLocalName()
    {
        $localName = 'element';
        $element = new VoidElement($localName, []);
        $this->assertEquals($localName, $element->getLocalName());
    }

    public function testGetAttributes()
    {
        $attributes = [];
        $element = new VoidElement('element', $attributes);
        $this->assertEquals($attributes, $element->getAttributes());
    }

    public function testSetLocalName()
    {
        $expected = 'setelement';
        $element = new VoidElement('element', []);
        $actual = $element->setLocalName($expected)->getLocalName();
        $this->assertEquals($expected, $actual);
    }

    public function testSetAttributes()
    {
        $attributeStub = $this->createMock(Attribute::class);
        $expected = [$attributeStub];
        $element = new VoidElement('element', []);
        $actual = $element->setAttributes($expected)->getAttributes();
        $this->assertEquals($expected, $actual);
    }
}
