<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Teein\Html\VirtualDom\Attribute;
use Teein\Html\VirtualDom\Text;
use Teein\Html\Ast\RawTextElement;

class RawTextElementTest extends TestCase
{
    /**
     * @dataProvider toHtmlProvider
     */
    public function testToHtml(RawTextElement $element, string $expected)
    {
        $actual = $element->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function toHtmlProvider() : array
    {
        // Create a empty RawTextElement
        $text = $this->createMock(Text::class);
        $text->method('toRawText')->willReturn('');
        $emptyElement = new RawTextElement('element', [], $text);

        // Create a RawTextElement with an attribute
        $attribute = $this->createMock(Attribute::class);
        $attribute->method('toHtml')->willReturn('attribute="value"');
        $attributeElement = new RawTextElement('element', [$attribute], $text);
        
        return [
            [$emptyElement, '<element></element>'],
            [$attributeElement, '<element attribute="value"></element>']
        ];
    }

    /**
     * @dataProvider beautifyProvider
     */
    public function testBeautify(RawTextElement $element, RawTextElement $expected)
    {
        $actual = $element->beautify();
        $this->assertEquals($expected, $actual);
    }

    public function beautifyProvider()
    {
        $text = $this->createMock(Text::class);
        $text->method('toRawText')->willReturn('');
        $element = new RawTextElement('element', [], $text);
        return [[$element, $element]];
    }

    /**
     * @dataProvider getLocalNameProvider
     */
    public function testGetLocalName(RawTextElement $element, string $expected)
    {
        $actual = $element->getLocalName();
        $this->assertEquals($expected, $actual);
    }

    public function getLocalNameProvider() : array
    {
        $text = $this->createMock(Text::class);
        $localName = 'element';
        $element = new RawTextElement($localName, [], $text);
        return [
            [$element, $localName]
        ];
    }

    /**
     * @dataProvider setLocalNameProvider
     */
    public function testSetLocalName(RawTextElement $element, string $expected)
    {
        $actual = $element->setLocalName($expected)->getLocalName();
        $this->assertEquals($expected, $actual);
    }

    public function setLocalNameProvider() : array
    {
        $text = $this->createMock(Text::class);
        $element = new RawTextElement('element', [], $text);
        return [
            [$element, 'lorem'],
            [$element, 'ipsum']
        ];
    }

    /**
     * @dataProvider getAttributesProvider
     */
    public function testGetAttributes(RawTextElement $element, array $expected)
    {
        $actual = $element->getAttributes();
        $this->assertEquals($expected, $actual);
    }

    public function getAttributesProvider() : array
    {
        $text = $this->createMock(Text::class);
        $attributes = [];
        $element = new RawTextElement('element', $attributes, $text);
        return [[$element, $attributes]];
    }

    /**
     * @dataProvider setAttributesProvider
     */
    public function testSetAttributes(RawTextElement $element, array $expected)
    {
        $actual = $element->setAttributes($expected)->getAttributes();
        $this->assertEquals($expected, $actual);
    }

    public function setAttributesProvider() : array
    {
        $text = $this->createMock(Text::class);
        $attributes = [];
        $element = new RawTextElement('element', [], $text);
        return [[$element, $attributes]];
    }

    /**
     * @dataProvider getTextProvider
     */
    public function testGetText(RawTextElement $element, Text $expected)
    {
        $actual = $element->getText();
        $this->assertEquals($expected, $actual);
    }

    public function getTextProvider() : array
    {
        $text = $this->createMock(Text::class);
        $element = new RawTextElement('element', [], $text);
        return [[$element, $text]];
    }

    /**
     * @dataProvider setTextProvider
     */
    public function testSetText(RawTextElement $element, Text $expected)
    {
        $actual = $element->setText($expected)->getText();
        $this->assertEquals($expected, $actual);
    }

    public function setTextProvider() : array
    {
        $text = $this->createMock(Text::class);
        $expected = $this->createMock(Text::class);
        $element = new RawTextElement('element', [], $text);
        return [[$element, $expected]];
    }
}
