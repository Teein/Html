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
}
