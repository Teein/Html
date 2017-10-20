<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\VirtualDom\Document as DocumentInterface;
use Mammalia\Html\VirtualDom\Element as ElementInterface;

/**
 * A Document represents a html-document, that is a document-type-definition,
 * i.e "<!DOCTYPE html>", grouped together with a html-root-element.
 */
final class Document implements DocumentInterface
{

    protected $root;

    protected $beautified;

    /**
     * Construct a new Document with given root $root.
     * 
     * @param Mammalia\Html\VirtualDom\Element $root The root-node of the new Document
     * @param bool $beautified A flag to capture wether the new Document should be
     *        beautified before output. This flag defaults to "false" and
     *        should never be set to "true" by the user. It is automatically
     *        set, whenever "beautify" is called on the document. This is
     *        a debugging utility only, so don't take the previous rule too
     *        serious, but make shure to unset the flag for production code.
     */
    public function __construct(ElementInterface $root, bool $beautified = false)
    {
        $this->root = $root;
        $this->beautified = $beautified;
    }

    /**
     * Get the html-representation of this document.
     */
    public function toHtml () : string
    {
        return "<!DOCTYPE html>" . ($this->beautified ? "\n" : "") . $this->root->toHtml();
    }

    /**
     * Get a beautified Document for debugging-purpose. This inserts a new line
     * right after the document-type definition "<!DOCTYPE html>" and recursively
     * invokes the beautify-method on its root-node and all its descendants.
     * 
     * This method should never be invoked directly. Instead use the top-level
     * function "beautify($document)" for the same purpose. Since this is method
     * is a debugging-utility only, don't take the former rule too serious, but
     * make sure to remove any call this method for production-code.
     * 
     * Make sure to remove the call to beautify for production-code.
     * 
     * @param int $level The current level of indentation. This should always be 0.
     */
    public function beautify (int $level = 0) : Beautifier
    {
        return new Document($this->root->beautify(), true);
    }

    /**
     * Get the root-node of this Document
     */
    public function getRoot() : ElementInterface
    {
        return $this->root;
    }

    /**
     * Get a new Document that is like this one but with the root-node
     * set to $root
     * 
     * @param Mammalia\Html\VirtualDom\Element $root The root-node of the new Document
     */
    public function setRoot(ElementInterface $root) : DocumentInterface
    {
        return new Document($root, $this->beautified);
    }
}
