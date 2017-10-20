<?php
declare(strict_types=1);

namespace CommonCrane\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use CommonCrane\Html\Ast\Attribute;

class AttributeTest extends TestCase
{
    public function testToHtml()
    {
        $attribute = new Attribute("name", "value");
        $attributeHtml = $attribute->toHtml();
        $this->assertEquals("name=\"value\"", $attributeHtml);
    }

    public function testGetName()
    {
        $expected = "name";
        $attribute = new Attribute($expected, "value");
        $actual = $attribute->getName();
        $this->assertEquals($expected, $actual);
    }

    public function testGetValue()
    {
        $expected = "value";
        $attribute = new Attribute("name", $expected);
        $actual = $attribute->getValue();
        $this->assertEquals($expected, $actual);
    }

    public function testSetName()
    {
        $expected = "name";
        $attribute = new Attribute("", "");
        $actual = $attribute->setName($expected)->getName();
        $this->assertEquals($expected, $actual);
    }

    public function testSetValue()
    {
        $expected = "value";
        $attribute = new Attribute("", "");
        $actual = $attribute->setValue($expected)->getValue();
        $this->assertEquals($expected, $actual);
    }
}
