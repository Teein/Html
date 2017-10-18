<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\Serializer\Element as Serializer;

abstract class Element implements Beautifier, Serializer
{
    protected $localName;

    protected $attributes;

    abstract public function beautify(int $level = 0) : Beautifier;

    protected function attributesToHtml()
    {
        return array_reduce($this->attributes, function ($html, $attribute) {
            $htmlAttribute = $attribute->toHtml();
            return "$html $htmlAttribute";
        }, '');
    }

}
