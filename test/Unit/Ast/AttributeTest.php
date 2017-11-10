<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Teein\Html\Ast\Attribute;

class AttributeTest extends TestCase
{
    
    /**
     * @dataProvider toHtmlProvider
     */
    public function testToHtml(Attribute $attribute, string $expected)
    {
        $actual = $attribute->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function toHtmlProvider() : array
    {
        return [
            [new Attribute("name", "value"), "name=\"value\""],
            [new Attribute("escaping1", "\""), "escaping1=\"&quot;\""],
            [new Attribute("escaping2", "&"), "escaping2=\"&amp;\""],
        ];
    }

    /**
     * @dataProvider nameProvider
     */
    public function testGetName(string $expected)
    {
        $attribute = new Attribute($expected, "value");
        $actual = $attribute->getName();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider nameProvider
     */
    public function testSetName(string $expected)
    {
        $attribute = new Attribute("", "");
        $actual = $attribute->setName($expected)->getName();
        $this->assertEquals($expected, $actual);
    }

    public function nameProvider() : array
    {
        return [["lorem"], ["ipsum"], ["dolor"], ["sit"], ["amet"], ["data-test"]];
    }

    /**
     * @dataProvider valueProvider
     */
    public function testGetValue(string $expected)
    {
        $attribute = new Attribute("name", $expected);
        $actual = $attribute->getValue();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider valueProvider
     */
    public function testSetValue(string $expected)
    {
        $attribute = new Attribute("", "");
        $actual = $attribute->setValue($expected)->getValue();
        $this->assertEquals($expected, $actual);
    }

    public function valueProvider() : array
    {
        return [["lorem"], ["ipsum"], ["dolor"], ["sit"], ["amet"], ["\""], ["&"]];
    }
}
