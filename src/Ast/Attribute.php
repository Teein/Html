<?php
declare(strict_types=1);

namespace CommonCrane\Html\Ast;

use CommonCrane\Html\VirtualDom\Attribute as AttributeInterface;

/**
 * An Attribute represents a html-attribute, that is a name-value-pair that is
 * assigned to an Element.
 */
final class Attribute implements AttributeInterface
{

    protected $name;

    protected $value;

    /**
     * Construct a new Attribute with name set to $name and value set to $value
     * @param string $name The name of the new Attribute
     * @param string $value The value of the new Attribute
     */
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the html-representation of this Attribute
     */
    public function toHtml() : string
    {
        $htmlName = htmlspecialchars($this->name, ENT_QUOTES | ENT_HTML5);
        $htmlValue = htmlspecialchars($this->value, ENT_QUOTES | ENT_HTML5);
        return "$htmlName=\"$htmlValue\"";
    }

    /**
     * Get the name of this Attribute
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Get the value of this Attribute
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * Get a new Attribute that is like this one but with name set to $name
     * 
     * @param string $name The name of the new Attribute
     */
    public function setName(string $name) : AttributeInterface
    {
        return new Attribute($name, $this->value);
    }
    
    /**
     * Get a new Attribute that is like this one but with value set to $value
     * 
     * @param string $value The value of the new Attribute
     */
    public function setValue(string $value) : AttributeInterface
    {
        return new Attribute($this->name, $value);
    }
}
