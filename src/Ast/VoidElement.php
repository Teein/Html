<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Ast\Element;
use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\VirtualDom\Element as ElementInterface;

/**
 * A NormalElement represents a html-element that must not have childNodes.
 * For instance, this is used to represent <br>- and <link>-elements.
 */
final class VoidElement extends Element implements ElementInterface
{

    /**
     * Construct a new VoidElement with localName set to $localName and
     * attributes set to $attributes
     * 
     * @param string $localName The localName of the new VoidElement
     * @param array $attributes The attributes of the new VoidElement
     */
    public function __construct(string $localName, array $attributes)
    {
        $this->localName = $localName;
        $this->attributes = $attributes;
    }

    /**
     * Get a beautified VoidElement for debugging-purpose. This inserts a
     * new line after the opening tag "<$localName>".
     * The original VoidElement is left unmodified.
     * 
     * This function should not be called directly on a VoidElement. It is
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
     * Get the html-representation of the this VoidElement.
     */
    public function toHtml() : string
    {
        $htmlLocalName = $this->localName;
        $htmlAttributes = $this->attributesToHtml();
        return "<{$htmlLocalName}{$htmlAttributes}>";
    }

    /**
     * Get a new VoidElement that is like this one but with its localName set
     * to $localName
     * 
     * @param string $localName The localName of the new VoidElement
     */
    public function setLocalName(string $localName) : ElementInterface
    {
        return new VoidElement($localName, $this->attributes);
    }

    /**
     * Get a new VoidElement that is like this one but with its attributes set
     * to $attributes
     * 
     * @param array $attributes The attributes of the new VoidElement
     */
    public function setAttributes(array $attributes) : ElementInterface
    {
        return new VoidElement($this->localName, $attributes);
    }
}
