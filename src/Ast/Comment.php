<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\VirtualDom\Comment as CommentInterface;

/**
 * A Comment represents a html-comment, that is a node with some text-content
 * that are placed inside "<!--" and "-->" enclosing-tags during serialization.
 */
final class Comment implements CommentInterface
{

    protected $comment;

    /**
     * Construct a new Comment with given $comment
     * 
     * @param $comment The content of the new Comment
     */
    public function __construct(string $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the html-representation of this Comment
     */
    public function toHtml () : string
    {
        $test = '/-->/ium'; // test for forbidden closing comment-tag
        $replacement = '--\\>';
        return "<!--" . preg_replace($test, $replacement, $this->comment) . "-->";
    }

    /**
     * Get a beautified Comment for debugging-purpose. This inserts a new line
     * right after the opening sequence "<!--" and right before the closing
     * seqence "-->". Additionally, all line-breaks inside the content of this
     * Comment are indented with respect to the current nesting level $level.
     * The original Comment is left unmodified.
     * 
     * This function should not be called directly on a Comment. It is invoked
     * automatically if the document-ancestor is about to be beautified.
     * However, it is a debugging-utility, so don't take the former rule too
     * serious, but make sure to remove the call to beautify for
     * production-code.
     * 
     * @param $level The current level of indentation
     */
    public function beautify (int $level = 0) : Beautifier
    {
        $indent = "\n" . str_repeat("    ", $level);
        $beautified = $indent . str_replace("\n", $indent, $this->comment) . $indent;
        return new Comment($beautified);
    }

    /**
     * Get the content of this Comment
     */
    public function getComment() : string
    {
        return $this->comment;
    }

    /**
     * Get a new Comment that is like this one but with its content set to
     * $content
     * 
     * @param $comment The content of the new comment
     */
    public function setComment(string $comment) : CommentInterface
    {
        return new Comment($comment);
    }
}
