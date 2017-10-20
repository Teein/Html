<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\VirtualDom\Element as ElementInterface;

abstract class Element implements ElementInterface
{
    protected $localName;

    protected $attributes;

    abstract public function toHtml() : string;

    abstract public function beautify(int $level = 0) : Beautifier;

    protected function attributesToHtml()
    {
        return array_reduce($this->attributes, function ($html, $attribute) {
            $htmlAttribute = $attribute->toHtml();
            return "$html $htmlAttribute";
        }, '');
    }

    public function getLocalName() : string
    {
        return $this->localName;
    }

    public function getAttributes() : array
    {
        return $this->attributes;
    }

}
