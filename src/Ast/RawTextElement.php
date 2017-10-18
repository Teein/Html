<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Ast\Element;
use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\Serializer\Text as TextSerializer;
use Mammalia\Html\Serializer\TextElement as Serializer;

final class RawTextElement extends Element implements Serializer
{

    protected $text;

    public function __construct(string $localName, array $attributes, TextSerializer $text)
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
}
