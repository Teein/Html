<?php
namespace Mammalia\Html\Ast;

use Mammalia\Html\Ast\Element;
use Mammalia\Html\Serializer\Element as Serializer;

class NormalElement extends Element implements Serializer
{

    protected $childNodes;

    public function __construct(string $localName, array $attributes, array $childNodes)
    {
        parent::__construct($localName, $attributes);
        $this->childNodes = $childNodes;
    }

    public function getChildNodes() : array
    {
        return $this->childNodes;
    }

    public function toHtml() : string
    {
        $htmlLocalName = $this->localName;
        $htmlAttributes = $this->attributesToHtml();
        $htmlChildeNodes = $this->childNodesToHtml();
        return "<{$htmlLocalName}{$htmlAttributes}>$htmlChildeNodes</$htmlLocalName>";
    }

    protected function childNodesToHtml()
    {
        return array_reduce($this->childNodes, function ($html, $childNode) {
            return $html . $childNode->toHtml();
        }, '');
    }
}
