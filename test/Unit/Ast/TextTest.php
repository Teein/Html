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
        $textHtml = $text->toNonTerminatingHtml('script');
        $this->assertEquals('Hello, World & Mars!', $textHtml);
    }

    public function testForbiddenOpeningTagShouldBeEscaped()
    {
        $text = new Text('<script>');
        $textHtml = $text->toNonTerminatingHtml('script');
        $this->assertEquals('<\\script>', $textHtml);
    }

    public function testForbiddenClosingTagShouldBeEscaped()
    {
        $text = new Text('</script>');
        $textHtml = $text->toNonTerminatingHtml('script');
        $this->assertEquals('<\\/script>', $textHtml);
    }

    public function testForbiddenOpeningCommentShouldBeEscpaed()
    {
        $text = new Text('<!-- -->');
        $textHtml = $text->toNonTerminatingHtml('script');
        $this->assertEquals('<\\!-- -->', $textHtml);
    }
}
