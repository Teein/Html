<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Teein\Html\VirtualDom\Attribute;
use Teein\Html\VirtualDom\Text;
use Teein\Html\Ast\TextElement;

class TextElementTest extends TestCase
{
    /**
     * @dataProvider toHtmlProvider
     */
    public function testToHtml(TextElement $element, string $expected)
    {
        $actual = $element->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function toHtmlProvider() : array
    {
        // Create an empty TextElement
        $text = $this->createMock(Text::class);
        $text->method('toHtml')->willReturn('');
        $emptyElement = new TextElement('element', [], $text);

        // Create an empty TextElement with one attribute
        $attribute = $this->createMock(Attribute::class);
        $attribute->method('toHtml')->willReturn('attribute="value"');
        $attributeElement = new TextElement('element', [$attribute], $text);

        return [
            [$emptyElement, '<element></element>'],
            [$attributeElement, '<element attribute="value"></element>']
        ];
    }

    /**
     * @dataProvider beautifyProvider
     */
    public function testBeautify(TextElement $element, TextElement $expected)
    {
        $actual = $element->beautify();
        $this->assertEquals($expected, $actual);
    }
    
    public function beautifyProvider() : array
    {
        $text = $this->createMock(Text::class);
        $text->method('toRawText')->willReturn('');
        $element = new TextElement('element', [], $text);
        return [[$element, $element]];
    }

    /**
     * @dataProvider getLocalNameProvider
     */
    public function testGetLocalName(TextElement $element, string $expected)
    {
        $actual = $element->getLocalName();
        $this->assertEquals($expected, $actual);
    }
    
    public function getLocalNameProvider() : array
    {
        $text = $this->createMock(Text::class);
        $localName = 'element';
        $element = new TextElement($localName, [], $text);
        return [[$element, $localName]];
    }

    /**
     * @dataProvider getAttributesProvider
     */
    public function testGetAttributes(TextElement $element, array $expected)
    {
        $actual = $element->getAttributes();
        $this->assertEquals($expected, $actual);
    }
    
    public function getAttributesProvider() : array
    {
        $text = $this->createMock(Text::class);
        $attributes = [];
        $element = new TextElement('element', $attributes, $text);
        return [[$element, $attributes]];
    }

    /**
     * @dataProvider setLocalNameProvider
     */
    public function testSetLocalName(TextElement $element, string $expected)
    {
        $actual = $element->setLocalName($expected)->getLocalName();
        $this->assertEquals($expected, $actual);
    }
    
    public function setLocalNameProvider() : array
    {
        $text = $this->createMock(Text::class);
        $expected = 'setelement';
        $element = new TextElement('element', [], $text);
        return [[$element, $expected]];
    }

    /**
     * @dataProvider setAttributesProvider
     */
    public function testSetAttributes(TextElement $element, array $expected)
    {
        $actual = $element->setAttributes($expected)->getAttributes();
        $this->assertEquals($expected, $actual);
    }
    
    public function setAttributesProvider() : array
    {
        $text = $this->createMock(Text::class);
        $attributes = [$this->createMock(Attribute::class)];
        $element = new TextElement('element', [], $text);
        return [[$element, $attributes]];
    }

    /**
     * @dataProvider getTextProvider
     */
    public function testGetText(TextElement $element, Text $expected)
    {
        $actual = $element->getText();
        $this->assertEquals($expected, $actual);
    }
    
    public function getTextProvider() : array
    {
        $text = $this->createMock(Text::class);
        $element = new TextElement('element', [], $text);
        return [[$element, $text]];
    }

    /**
     * @dataProvider setTextProvider
     */
    public function testSetText(TextElement $element, Text $expected)
    {
        $actual = $element->setText($expected)->getText();
        $this->assertEquals($expected, $actual);
    }
    
    public function setTextProvider() : array
    {
        $text = $this->createMock(Text::class);
        $element = new TextElement('element', [], $text);
        $setText = $this->createMock(Text::class);
        return [[$element, $setText]];
    }
}
