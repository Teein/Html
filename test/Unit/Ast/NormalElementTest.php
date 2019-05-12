<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Teein\Html\VirtualDom\Attribute;
use Teein\Html\VirtualDom\Element;
use Teein\Html\Ast\NormalElement;

class NormalElementTest extends TestCase
{

    /**
     * @dataProvider toHtmlProvider
     */
    public function testToHtml(NormalElement $element, string $expected)
    {
        $actual = $element->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function toHtmlProvider() : array
    {
        // Stub an empty element
        $emptyElement = new NormalElement('element', [], []);

        // Stub an element with exactly one attribute
        $attribute = $this->createMock(Attribute::class);
        $attribute->method('toHtml')->willReturn('attribute="value"');
        $attributeElement = new NormalElement('element', [$attribute], []);

        // Stub an Element with exactly one child
        $child = $this->createMock(Element::class);
        $child->method('toHtml')->willReturn('<child>');
        $parentElement = new NormalElement('parent', [], [$child]);

        return [
            [$emptyElement, '<element></element>'],
            [$attributeElement, '<element attribute="value"></element>'],
            [$parentElement, '<parent><child></parent>']
        ];
    }

    /**
     * @dataProvider beautifyProvider
     */
    public function testBeautify(NormalElement $element, string $expected)
    {
        $actual = $element->beautify()->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function beautifyProvider() : array
    {
        // Create an empty element
        $emptyElement = new NormalElement('empty', [], []);

        // Create an element with exactly one child
        $child = new NormalElement('child', [], []);
        $parentElement = new NormalElement('parent', [], [$child]);

        // Create an element with multiple children
        $twinParentElement = new NormalElement('parent', [], [$child, $child]);

        // Create an element with on child and one grantchild
        $grantParentElement = new NormalElement('grantparent', [], [$parentElement]);

        return [
            [
                $emptyElement,
                "<empty>\n</empty>"
            ],
            [
                $parentElement,
                "<parent>\n    <child>\n    </child>\n</parent>"
            ],
            [
                $twinParentElement,
                "<parent>\n    <child>\n    </child>\n    <child>\n    </child>\n</parent>"
            ],
            [
                $grantParentElement,
                "<grantparent>\n    <parent>\n        <child>\n        </child>\n    </parent>\n</grantparent>"
            ]
        ];
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
