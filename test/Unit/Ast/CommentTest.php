<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Mammalia\Html\Ast\Comment;

class CommentTest extends TestCase
{
    public function testToHtml()
    {
        $comment = new Comment("lorem ipsum");
        $commentHtml = $comment->toHtml();
        $this->assertEquals("<!--lorem ipsum-->", $commentHtml);
    }

    public function testToHtmlForEscaping()
    {
        $comment = new Comment("-->");
        $commentHtml = $comment->toHtml();
        $this->assertEquals("<!----\\>-->", $commentHtml);
    }

    public function testBeautify ()
    {
        $comment = new Comment("lorem ipsum");
        $commentHtml = $comment->beautify()->toHtml();
        $this->assertEquals("<!--\nlorem ipsum\n-->", $commentHtml);
    }

    public function testBeautifyWithLinebreaks ()
    {
        $comment = new Comment("lorem\nipsum");
        $commentHtml = $comment->beautify()->toHtml();
        $this->assertEquals("<!--\nlorem\nipsum\n-->", $commentHtml);
    }

    public function testBeautifyWithLinebreaksAndLevel1 ()
    {
        $comment = new Comment("lorem\nipsum");
        $commentHtml = $comment->beautify(1)->toHtml();
        $this->assertEquals("<!--\n    lorem\n    ipsum\n    -->", $commentHtml);
    }
}
