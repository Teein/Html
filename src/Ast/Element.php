<?php
namespace Mammalia\Html\Ast;

class Element
{
    protected $localName;

    protected $attributes;

    public function __construct(string $localName, array $attributes)
    {
        $this->localName = $localName;
        $this->attributes = $attributes;
    }

    public function getLocalName() : string
    {
        return $this->localName;
    }

    public function getAttributes() : array
    {
        return $this->attributes;
    }

    protected function attributesToHtml()
    {
        return array_reduce($this->attributes, function ($html, $attribute) {
            $htmlAttribute = $attribute->toHtml();
            return "$html $htmlAttribute";
        }, '');
    }
}
