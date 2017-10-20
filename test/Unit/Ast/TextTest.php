<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;

use Mammalia\Html\Ast\Text;

class TextTest extends TestCase
{
    public function testToHtml()
    {
        $text = new Text('Hello, World!');
        $textHtml = $text->toHtml();
        $this->assertEquals('Hello, World!', $textHtml);
    }

    public function testEscaping()
    {
        $text = new Text('</title>');
        $textHtml = $text->toHtml();
        $this->assertEquals('&lt;/title&gt;', $textHtml);
    }

    public function testAmpersandShouldBePreserved()
    {
        $text = new Text('Hello, World & Mars!');
        $textHtml = $text->toRawText('script');
        $this->assertEquals('Hello, World & Mars!', $textHtml);
    }

    public function testForbiddenOpeningTagShouldBeEscaped()
    {
        $text = new Text('<script>');
        $textHtml = $text->toRawText('script');
        $this->assertEquals('<\\script>', $textHtml);
    }

    public function testForbiddenClosingTagShouldBeEscaped()
    {
        $text = new Text('</script>');
        $textHtml = $text->toRawText('script');
        $this->assertEquals('<\\/script>', $textHtml);
    }

    public function testForbiddenOpeningCommentShouldBeEscpaed()
    {
        $text = new Text('<!-- -->');
        $textHtml = $text->toRawText('script');
        $this->assertEquals('<\\!-- -->', $textHtml);
    }

    public function testGetText()
    {
        $expected = 'lorem ipsum';
        $element = new Text($expected);
        $actual = $element->getText();
        $this->assertEquals($expected, $actual);
    }

    public function testSetText()
    {
        $expected = 'lorem ipsum';
        $element = new Text('');
        $actual = $element->setText($expected)->getText();
        $this->assertEquals($expected, $actual);
    }
}
