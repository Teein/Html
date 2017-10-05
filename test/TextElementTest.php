<?php

use PHPUnit\Framework\TestCase;

use function Mammalia\Html\Elements\title;
use function Mammalia\Html\Elements\script;
use function Mammalia\Html\Text\text;

class TextElementTest extends TestCase
{
    public function testToHtml()
    {
        $title = title()(text('Hello, World!'));
        $titleHtml = $title->toHtml();
        $this->assertEquals('<title>Hello, World!</title>', $titleHtml);
    }

    public function testEscaping()
    {
        $title = title()(text('</title>'));
        $titleHtml = $title->toHtml();
        $this->assertEquals('<title>&lt;/title&gt;</title>', $titleHtml);
    }

    public function testAmpersandShouldBePreserved()
    {
        $script = script()(text('"Hello, World & Mars!"'));
        $scriptHtml = $script->toHtml();
        $this->assertEquals('<script>"Hello, World & Mars!"</script>', $scriptHtml);
    }

    public function testForbiddenOpeningTagShouldBeEscaped()
    {
        $script = script()(text('"<script>"'));
        $scriptHtml = $script->toHtml();
        $this->assertEquals('<script>"<\\script>"</script>', $scriptHtml);
    }

    public function testForbiddenClosingTagShouldBeEscaped()
    {
        $script = script()(text('"</script>"'));
        $scriptHtml = $script->toHtml();
        $this->assertEquals('<script>"<\\/script>"</script>', $scriptHtml);
    }

    public function testForbiddenOpeningCommentShouldBeEscpaed()
    {
        $script = script()(text('"<!-- -->"'));
        $scriptHtml = $script->toHtml();
        $this->assertEquals('<script>"<\\!-- -->"</script>', $scriptHtml);
    }
}
