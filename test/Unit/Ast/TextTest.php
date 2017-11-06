<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;

use Teein\Html\Ast\Text;

class TextTest extends TestCase
{
    /**
     * @dataProvider toHtmlProvider
     */
    public function testToHtml(Text $text, string $expected)
    {
        $actual = $text->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function toHtmlProvider() : array
    {
        return [
            [new Text('Hello, World!'), 'Hello, World!'],
            [new Text('</title>'), '&lt;/title&gt;']
        ];
    }

    public function testBeautify()
    {
        $expected = new Text('Hello, World!');
        $actual = $expected->beautify();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider toRawTextProvider
     */
    public function testToRawText(Text $text, string $localName, string $expected)
    {
        $actual = $text->toRawText($localName);
        $this->assertEquals($expected, $actual);
    }

    public function toRawTextProvider() : array
    {
        return [
            [new Text('Hello, World & Mars!'), 'script', 'Hello, World & Mars!'],
            [new Text('<script>'), 'script', '<\\script>'],
            [new Text('</script>'), 'script', '<\\/script>'],
            [new Text('<!-- -->'), 'script', '<\\!-- -->']
        ];
    }

    /**
     * @dataProvider getTextProvider
     */
    public function testGetText(Text $text, string $expected)
    {
        $actual = $text->getText();
        $this->assertEquals($expected, $actual);
    }

    public function getTextProvider() : array
    {
        return [
            [new Text('lorem'), 'lorem'],
            [new Text('ipsum'), 'ipsum']
        ];
    }

    /**
     * @dataProvider setTextProvider
     */
    public function testSetText(Text $text, string $expected)
    {
        $actual = $text->setText($expected)->getText();
        $this->assertEquals($expected, $actual);
    }

    public function setTextProvider() : array
    {
        return [
            [new Text(''), 'lorem'],
            [new Text(''), 'ipsum']
        ];
    }
}
