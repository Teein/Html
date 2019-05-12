<?php
declare(strict_types=1);

namespace Teein\Html\Ast;

use Teein\Html\Ast\Element;
use Teein\Html\Ast\Text;
use Teein\Html\Beautifier\Beautifier;
use Teein\Html\VirtualDom\Element as ElementInterface;

/**
 * A NormalElement represents a html-element that may have childNodes.
 */
final class NormalElement extends Element implements ElementInterface
{

    protected $childNodes;

    /**
     * Construct a new NormalElement with localName set to $localName,
     * attributes set to $attributes and childNodes set to $childNodes
     *
     * @param string $localName The localName of the new NormalElement
     * @param array $attributes The attributes of the new NormalElement
     * @param array $childNodes The childNodes of the new NormalElement
     */
    public function __construct(string $localName, array $attributes, array $childNodes)
    {
        $this->localName = $localName;
        $this->attributes = $attributes;
        $this->childNodes = $childNodes;
    }

    /**
     * Get a beautified NormalElement for debugging-purpose. This inserts a new
     * line after the opening tag "<$localName>" and right before the closing
     * tag "</$localName>. Additionally, "beautify" is invoked recursively on
     * all childNodes $childNodes.
     * The original NormalElement is left unmodified.
     *
     * This function should not be called directly on a NormalElement. It is
     * invoked automatically if the document-ancestor is about to be
     * beautified. However, it is a debugging-utility, so don't take the former
     * rule too serious, but make sure to remove the call to "beautify" for
     * production-code.
     *
     * @param int $level The current level of indentation
     */
    public function beautify(int $level = 0) : Beautifier
    {
        $indentChild = new Text("\n" . str_repeat("    ", $level + 1));
        $indentClosingTag = new Text("\n" . str_repeat("    ", $level));
        $children = array_merge(array_reduce(
            $this->childNodes,
            function ($children, $child) use ($level, $indentChild) {
                return array_merge($children, [$indentChild, $child->beautify($level + 1)]);
            },
            []
        ), [$indentClosingTag]);
        return new NormalElement($this->localName, $this->attributes, $children);
    }

    /**
     * Get the html-representation of the this NormalElement.
     */
    public function toHtml() : string
    {
        $htmlLocalName = $this->localName;
        $htmlAttributes = $this->attributesToHtml();
        $htmlChildeNodes = $this->childNodesToHtml();
        return "<{$htmlLocalName}{$htmlAttributes}>$htmlChildeNodes</$htmlLocalName>";
    }

    /**
     * Get the html-representation of this NormalElement's childNodes.
     */
    protected function childNodesToHtml()
    {
        return array_reduce($this->childNodes, function ($html, $childNode) {
            return $html . $childNode->toHtml();
        }, '');
    }

    /**
     * Get childNodes of this NormalElement.
     */
    public function getChildNodes() : array
    {
        return $this->childNodes;
    }

    /**
     * Get a new NormalElement that is like this one but with localName set to
     * $localName
     *
     * @param string $localName The localName of the new NormalElement
     */
    public function setLocalName(string $localName) : ElementInterface
    {
        return new NormalElement($localName, $this->attributes, $this->childNodes);
    }

    /**
     * Get a new NormalElement that is like this one but with attributes set to
     * $attributes
     *
     * @param array $attributes The attributes of the new NormalElement
     */
    public function setAttributes(array $attributes) : ElementInterface
    {
        return new NormalElement($this->localName, $attributes, $this->childNodes);
    }

    /**
     * Get a new NormalElement that is like this one but with childNodes set to
     * $childNodes
     *
     * @param array $childNodes The childNodes of the new NormalElement
     */
    public function setChildNodes(array $childNodes) : ElementInterface
    {
        return new NormalElement($this->localName, $this->attributes, $childNodes);
    }
}
