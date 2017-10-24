<?php
declare(strict_types=1);

namespace Teein\Html\Ast;

use Teein\Html\Ast\Element;
use Teein\Html\Beautifier\Beautifier;
use Teein\Html\VirtualDom\Text as TextInterface;
use Teein\Html\VirtualDom\Element as ElementInterface;

/**
 * A extElement represents a html-element which contents are restricted
 * to a certain limitations. Currently, this is only used to  represent
 * <textarea>- and <title>-element.
 */
final class TextElement extends Element implements ElementInterface
{

    protected $text;

    /**
     * Construct a new TextElement with localName set to $localName, attributes
     * set to $attributes and text-content set to $text.
     * 
     * @param string $localName The localName of the new TextElement
     * @param array $attributes The attributes of the new TextElement
     * @param TextInterface $text The text-content of the new TextElement
     */
    public function __construct(string $localName, array $attributes, TextInterface $text)
    {
        $this->localName = $localName;
        $this->attributes = $attributes;
        $this->text = $text;
    }

    /**
     * Get a beautified TextElement for debugging-purpose. This inserts a
     * new line after the opening tag "<$localName>" and right before the
     * closing tag "</$localName>. Additionally, "beautify" is invoked
     * recursively on all childNodes $childNodes.
     * The original TextElement is left unmodified.
     * 
     * This function should not be called directly on a TextElement. It is
     * invoked automatically if the document-ancestor is about to be
     * beautified. However, it is a debugging-utility, so don't take the former
     * rule too serious, but make sure to remove the call to "beautify" for
     * production-code.
     * 
     * @param int $level The current level of indentation
     */
    public function beautify(int $level = 0) : Beautifier
    {
        return $this;
    }

    /**
     * Get the html-representation of the this TextElement.
     */
    public function toHtml() : string
    {
        $htmlAttributes = $this->attributesToHtml();
        $htmlLocalName = $this->localName;
        $htmlText = $this->text->toHtml();
        return "<{$htmlLocalName}{$htmlAttributes}>$htmlText</$htmlLocalName>";
    }

    /**
     * Get the text-content of this TextElement
     */
    public function getText() : TextInterface
    {
        return $this->text;
    }

    /**
     * Get a new TextElement that is like this one but with text-content set to
     * $text
     * 
     * @param TextInterface $text The text-content of the new TextElement
     */
    public function setText(TextInterface $text) : ElementInterface
    {
        return new TextElement($this->localName, $this->attributes, $text);
    }

    /**
     * Get a new TextElement that is like this one but with localName set to
     * $localName
     * 
     * @param string $localName The localName of the new TextElement
     */
    public function setLocalName(string $localName) : ElementInterface
    {
        return new TextElement($localName, $this->attributes, $this->text);
    }

    /**
     * Get a new TextElement that is like this one but with attributes set to
     * $attributes
     * 
     * @param array $attributes The attributes of the new TextElement
     */
    public function setAttributes(array $attributes) : ElementInterface
    {
        return new TextElement($this->localName, $attributes, $this->text);
    }
}
