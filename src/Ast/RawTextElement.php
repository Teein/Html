<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Ast\Element;
use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\VirtualDom\Text as TextInterface;
use Mammalia\Html\VirtualDom\Element as ElementInterface;

final class RawTextElement extends Element implements ElementInterface
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
        $htmlText = $this->text->toRawText($htmlLocalName);
        return "<{$htmlLocalName}{$htmlAttributes}>$htmlText</$htmlLocalName>";
    }

    public function getText() : TextInterface
    {
        return $this->text;
    }

    public function setText(TextInterface $text) : ElementInterface
    {
        return new RawTextElement($this->localName, $this->attributes, $text);
    }

    public function setLocalName(string $localName) : ElementInterface
    {
        return new RawTextElement($localName, $this->attributes, $this->text);
    }

    public function setAttributes(array $attributes) : ElementInterface
    {
        return new RawTextElement($this->localName, $attributes, $this->text);
    }
}
