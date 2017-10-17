<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Serializer\Element as Serializer;

abstract class Element implements Serializer
{
    protected $localName;

    protected $attributes;

    public function __construct(string $localName, array $attributes)
    {
        $this->localName = $localName;
        $this->attributes = $attributes;
    }

    abstract public function beautify(int $level = 0) : Element;

    protected function attributesToHtml()
    {
        return array_reduce($this->attributes, function ($html, $attribute) {
            $htmlAttribute = $attribute->toHtml();
            return "$html $htmlAttribute";
        }, '');
    }

}
