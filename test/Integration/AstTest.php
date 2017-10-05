<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Integration;

use PHPUnit\Framework\TestCase;

use Mammalia\Html\Ast\Attribute;
use Mammalia\Html\Ast\NormalElement;

class AstTest extends TestCase
{

    public function testWithAttributes()
    {
        $attribute = new Attribute('attribute','value');
        $element = new NormalElement('element', [$attribute], []);
        $elementHtml = $element->toHtml();
        $this->assertEquals('<element attribute="value"></element>', $elementHtml);
    }

    public function testWithDescendants()
    {
        $child = new NormalElement('child',[], []);
        $element = new NormalElement('parent', [], [$child]);
        $elementHtml = $element->toHtml();
        $this->assertEquals('<parent><child></child></parent>', $elementHtml);
    }
}
