<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Ast\Element;
use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\Serializer\ToHtml;
use Mammalia\Html\VirtualDom\Text as TextInterface;
use Mammalia\Html\VirtualDom\Element as ElementInterface;

final class TextElement extends Element implements ElementInterface, ToHtml
{

    protected $text;

    public function __construct(string $localName, array $attributes, TextInterface $text)
    {
        $this->localName = $localName;
        $this->attributes = $attributes;
        $this->text = $text;
    }

    public function beautify(int $level = 0) : Beautifier
    {
        return $this;
    }

    public function toHtml() : string
    {
        $htmlAttributes = $this->attributesToHtml();
        $htmlLocalName = $this->localName;
        $htmlText = $this->text->toHtml();
        return "<{$htmlLocalName}{$htmlAttributes}>$htmlText</$htmlLocalName>";
    }
}
