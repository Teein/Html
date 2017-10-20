<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\VirtualDom\Comment as CommentInterface;

final class Comment implements CommentInterface
{

    protected $comment;

    public function __construct(string $comment)
    {
        $this->comment = $comment;
    }

    public function toHtml () : string
    {
        $test = '/-->/ium'; // test for forbidden closing comment-tag
        $replacement = '--\\>';
        return "<!--" . preg_replace($test, $replacement, $this->comment) . "-->";
    }

    public function beautify (int $level = 0) : Beautifier
    {
        $indent = "\n" . str_repeat("    ", $level);
        $beautified = $indent . str_replace("\n", $indent, $this->comment) . $indent;
        return new Comment($beautified);
    }

    public function getComment() : string
    {
        return $this->comment;
    }

    public function setComment(string $comment) : CommentInterface
    {
        return new Comment($comment);
    }
}
