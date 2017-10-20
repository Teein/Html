<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Ast\Element;
use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\VirtualDom\Text as TextInterface;
use Mammalia\Html\VirtualDom\Element as ElementInterface;

/**
 * A RawTextElement represents a html-element which contents are restricted
 * to a certain kind of foreign-language. Currently, this is only used to
 * represent <script>-elements, that may comprise JavaScript-content and
 * <style>-element, that may comprise CSS-content. These elements use a
 * different encoding-algorithm when serialized.
 */
final class RawTextElement extends Element implements ElementInterface
{

    protected $text;

    /**
     * Construct a new RawTextElement with localName set to $localName,
     * attributes set to $attributes and text-content set to $text
     * 
     * @param string $localName The localName of the new RawTextElement
     * @param array $attributes The attributes of the new RawTextElement
     * @param TextInterface $text The text-content of the new RawTextElement
     */
    public function __construct(string $localName, array $attributes, TextInterface $text)
    {
        $this->localName = $localName;
        $this->attributes = $attributes;
        $this->text = $text;
    }

    /**
     * Get a beautified RawTextElement for debugging-purpose. This inserts a
     * new line after the opening tag "<$localName>" and right before the
     * closing tag "</$localName>. Additionally, "beautify" is invoked
     * recursively on all childNodes $childNodes.
     * The original RawTextElement is left unmodified.
     * 
     * This function should not be called directly on a RawTextElement. It is
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
     * Get the html-representation of the this RawTextElement.
     */
    public function toHtml() : string
    {
        $htmlAttributes = $this->attributesToHtml();
        $htmlLocalName = $this->localName;
        $htmlText = $this->text->toRawText($htmlLocalName);
        return "<{$htmlLocalName}{$htmlAttributes}>$htmlText</$htmlLocalName>";
    }

    /**
     * Get the text-content of the this RawTextElement.
     */
    public function getText() : TextInterface
    {
        return $this->text;
    }

    /**
     * Get a new RawTextElement that is like this one but with its text-content
     * set to $text
     * 
     * @param TextInterface $text The text-content of the new RawTextElement
     */
    public function setText(TextInterface $text) : ElementInterface
    {
        return new RawTextElement($this->localName, $this->attributes, $text);
    }

    /**
     * Get a new RawTextElement that is like this one but with its localName
     * set to $localName
     * 
     * @param string $localName The localName of the new RawTextElement
     */
    public function setLocalName(string $localName) : ElementInterface
    {
        return new RawTextElement($localName, $this->attributes, $this->text);
    }

    /**
     * Get a new RawTextElement that is like this one but with its attributes
     * set to $attributes
     * 
     * @param array $attributes The attributes of the new RawTextElement
     */
    public function setAttributes(array $attributes) : ElementInterface
    {
        return new RawTextElement($this->localName, $attributes, $this->text);
    }
}
