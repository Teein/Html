<?php
namespace Mammalia\Html\Ast;

use Mammalia\Html\Ast\Element;
use Mammalia\Html\Serializer\Element as Serializer;

class VoidElement extends Element implements Serializer
{
    public function __construct(string $localName, array $attributes, array $childNodes)
    {
        parent::__construct($localName, $attributes);
    }

    public function toHtml() : string
    {
        $htmlLocalName = $this->getLocalName();
        $htmlAttributes = $this->attributesToHtml();
        return "<{$htmlLocalName}{$htmlAttributes}>";
    }
}
