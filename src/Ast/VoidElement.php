<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Ast\Element;
use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\Serializer\ToHtml;
use Mammalia\Html\VirtualDom\Element as ElementInterface;

final class VoidElement extends Element implements ElementInterface, ToHtml, Beautifier
{
    public function __construct(string $localName, array $attributes)
    {
        $this->localName = $localName;
        $this->attributes = $attributes;
    }

    public function beautify(int $level = 0) : Beautifier
    {
        return $this;
    }

    public function toHtml() : string
    {
        $htmlLocalName = $this->localName;
        $htmlAttributes = $this->attributesToHtml();
        return "<{$htmlLocalName}{$htmlAttributes}>";
    }
}
