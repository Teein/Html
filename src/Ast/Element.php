<?php
declare(strict_types=1);

namespace Teein\Html\Ast;

use Teein\Html\Beautifier\Beautifier;
use Teein\Html\VirtualDom\Element as ElementInterface;

/**
 * An Element represents common properties of more specific types of html-
 * elements. More precise, an Element comprises a localName and optionally
 * some attributes.
 */
abstract class Element implements ElementInterface
{
    protected $localName;

    protected $attributes;

    /**
     * Get the html-representation of the Attributes of this Element
     */
    protected function attributesToHtml()
    {
        return array_reduce($this->attributes, function ($html, $attribute) {
            $htmlAttribute = $attribute->toHtml();
            return "$html $htmlAttribute";
        }, '');
    }

    /**
     * Get the localName of this Element
     */
    public function getLocalName() : string
    {
        return $this->localName;
    }

    /**
     * Get the attributes of this Element
     */
    public function getAttributes() : array
    {
        return $this->attributes;
    }

}
