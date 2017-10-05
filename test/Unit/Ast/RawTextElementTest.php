<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Mammalia\Html\Serializer\Text;
use Mammalia\Html\Ast\RawTextElement;

class RawTextElementTest extends TestCase
{
    public function testToHtml()
    {
        $textStub = $this->createMock(Text::class);
        $textStub->method('toNonTerminatingHtml')->willReturn('');
        $element = new RawTextElement('element', [], $textStub);
        $elementHtml = $element->toHtml();
        $this->assertEquals($elementHtml, '<element></element>');
    }
}
