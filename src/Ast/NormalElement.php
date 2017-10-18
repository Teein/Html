<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Ast\Element;
use Mammalia\Html\Ast\Text;
use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\Serializer\ToHtml;
use Mammalia\Html\VirtualDom\Element as ElementInterface;

final class NormalElement extends Element implements ElementInterface, ToHtml, Beautifier
{

    protected $childNodes;

    public function __construct(string $localName, array $attributes, array $childNodes)
    {
        $this->localName = $localName;
        $this->attributes = $attributes;
        $this->childNodes = $childNodes;
    }

    public function beautify(int $level = 0) : Beautifier
    {
        $indentChild = new Text("\n" . str_repeat("    ", $level + 1));
        $indentClosingTag = new Text("\n" . str_repeat("    ", $level));
        $children = array_merge(array_reduce($this->childNodes, function ($children, $child) use ($level, $indentChild) {
            return array_merge($children, [$indentChild, $child->beautify($level + 1)]);
        }, []), [$indentClosingTag]);
        return new NormalElement($this->localName, $this->attributes, $children);
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
