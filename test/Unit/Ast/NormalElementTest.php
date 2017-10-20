<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Mammalia\Html\VirtualDom\Attribute;
use Mammalia\Html\VirtualDom\Element;
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

    public function testBeautifierWithoutChildren()
    {
        $element = new NormalElement('empty', [], []);
        $beautifiedHtml = $element->beautify()->toHtml();
        $this->assertEquals("<empty>\n</empty>", $beautifiedHtml);
    }

    public function testBeautifierWithChild()
    {
        $child = new NormalElement('child', [], []);
        $element = new NormalElement('parent', [], [$child]);
        $beautifiedHtml = $element->beautify()->toHtml();
        $this->assertEquals("<parent>\n    <child>\n    </child>\n</parent>", $beautifiedHtml);
    }


    public function testBeautifierWithSingleChildren()
    {
        $child = new NormalElement('child', [], []);
        $element = new NormalElement('parent', [], [$child, $child]);
        $beautifiedHtml = $element->beautify()->toHtml();
        $this->assertEquals("<parent>\n    <child>\n    </child>\n    <child>\n    </child>\n</parent>", $beautifiedHtml);
    }

    public function testBeautifierWithGrandChild()
    {
        $grandChild = new NormalElement('grandchild', [], []);
        $child = new NormalElement('child', [], [$grandChild]);
        $element = new NormalElement('parent', [], [$child]);
        $beautifiedHtml = $element->beautify()->toHtml();
        $this->assertEquals("<parent>\n    <child>\n        <grandchild>\n        </grandchild>\n    </child>\n</parent>", $beautifiedHtml);
    }

    public function testGetLocalName()
    {
        $localName = 'element';
        $element = new NormalElement($localName, [], []);
        $this->assertEquals($localName, $element->getLocalName());
    }

    public function testGetAttributes()
    {
        $attributes = [];
        $element = new NormalElement('element', $attributes, []);
        $this->assertEquals($attributes, $element->getAttributes());
    }

    public function testGetChildNodes()
    {
        $childNodes = [];
        $element = new NormalElement('element', [], $childNodes);
        $this->assertEquals($childNodes, $element->getChildNodes());
    }

    public function testSetLocalName()
    {
        $expected = 'setelement';
        $element = new NormalElement('element', [], []);
        $actual = $element->setLocalName($expected)->getLocalName();
        $this->assertEquals($expected, $actual);
    }

    public function testSetAttributes()
    {
        $attributeStub = $this->createMock(Attribute::class);
        $expected = [$attributeStub];
        $element = new NormalElement('element', [], []);
        $actual = $element->setAttributes($expected)->getAttributes();
        $this->assertEquals($expected, $actual);
    }

    public function testSetChildNodes()
    {
        $child = new NormalElement('child', [], []);
        $expected = [$child];
        $element = new NormalElement('element', [], []);
        $actual = $element->setChildNodes($expected)->getChildNodes();
        $this->assertEquals($expected, $actual);
    }
}
