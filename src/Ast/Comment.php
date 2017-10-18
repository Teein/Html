<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\Serializer\Comment as Serializer;

final class Comment implements Beautifier, Serializer
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
}
