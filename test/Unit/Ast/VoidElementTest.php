<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Teein\Html\VirtualDom\Attribute;
use Teein\Html\Ast\VoidElement;

class VoidElementTest extends TestCase
{
    /**
     * @dataProvider toHtmlProvider
     */
    public function testToHtml(VoidElement $element, string $expected)
    {
        $actual = $element->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function toHtmlProvider() : array
    {
        $attribute = $this->createMock(Attribute::class);
        $attribute->method('toHtml')->willReturn('attribute="value"');
        return [
            [new VoidElement('element', []), '<element>'],
            [new VoidElement('element', [$attribute]), '<element attribute="value">']
        ];
    }

    public function testBeautify()
    {
        $element = new VoidElement('element', []);
        $actual = $element->beautify();
        $this->assertEquals($element, $actual);
    }

    /**
     * @dataProvider getLocalNameProvider
     */
    public function testGetLocalName(VoidElement $element, string $expected)
    {
        $actual = $element->getLocalName();
        $this->assertEquals($expected, $actual);
    }

    public function getLocalNameProvider() : array
    {
        return [
            [new VoidElement('lorem', []), 'lorem'],
            [new VoidElement('ipsum', []), 'ipsum'],
        ];
    }

    /**
     * @dataProvider getAttributesProvider
     */
    public function testGetAttributes(VoidElement $element, array $expected)
    {
        $actual = $element->getAttributes();
        $this->assertEquals($expected, $actual);
    }

    public function getAttributesProvider() : array
    {
        $attributes = [];
        $element = new VoidElement('element', $attributes);
        return [[$element, $attributes]];
    }

    /**
     * @dataProvider setLocalNameProvider
     */
    public function testSetLocalName(VoidElement $element, string $expected)
    {
        $actual = $element->setLocalName($expected)->getLocalName();
        $this->assertEquals($expected, $actual);
    }

    public function setLocalNameProvider() : array
    {
        return [
            [new VoidElement('', []), 'lorem'],
            [new VoidElement('', []), 'ipsum']
        ];
    }

    /**
     * @dataProvider setAttributesProvider
     */
    public function testSetAttributes(VoidElement $element, array $expected)
    {
        $actual = $element->setAttributes($expected)->getAttributes();
        $this->assertEquals($expected, $actual);
    }

    public function setAttributesProvider() : array
    {
        $attributes = [$this->createMock(Attribute::class)];
        $element = new VoidElement('', []);
        return [[$element, $attributes]];
    }
}
