<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Teein\Html\Ast\Comment;

class CommentTest extends TestCase
{

    /**
     * @dataProvider toHtmlProvider
     */
    public function testToHtml(Comment $comment, string $expected)
    {
        $actual = $comment->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function toHtmlProvider() : array
    {
        return [
            [new Comment("lorem ipsum"), "<!--lorem ipsum-->"],
            [new Comment("-->"), "<!----\\>-->"]
        ];
    }

    /**
     * @dataProvider beautifyProvider
     */
    public function testBeautify(Comment $comment, string $expected)
    {
        $actual = $comment->beautify()->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function beautifyProvider() : array
    {
        return [
            [new Comment("lorem ipsum"), "<!--\nlorem ipsum\n-->"],
            [new Comment("lorem\nipsum"), "<!--\nlorem\nipsum\n-->"]
        ];
    }

    /**
     * @dataProvider beautifyWithIndentionProvider
     */
    public function testBeautifyWithIndention(Comment $comment, string $expected)
    {
        $actual = $comment->beautify(1)->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function beautifyWithIndentionProvider() : array
    {
        return [
            [new Comment("lorem ipsum"), "<!--\n    lorem ipsum\n    -->"],
            [new Comment("lorem\nipsum"), "<!--\n    lorem\n    ipsum\n    -->"]
        ];
    }

    /**
     * @dataProvider commentProvider
     */
    public function testGetComment($expected)
    {
        $comment = new Comment($expected);
        $actual = $comment->getComment();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider commentProvider
     */
    public function testSetComment($expected)
    {
        $comment = new Comment("any comment (will be ignored)");
        $actual = $comment->setComment($expected)->getComment();
        $this->assertEquals($expected, $actual);
    }


    public function commentProvider() : array
    {
        return [["lorem"], ["ipsum"], ["dolor"], ["sit"], ["amet"], ["-->"], ["<!--"]];
    }
}
