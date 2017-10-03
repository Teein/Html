<?php
namespace Mammalia\Html\Ast;

use Mammalia\Html\Ast\Element;
use Mammalia\Html\Serializer\ToHtml;

class EscapableRawTextElement extends Element implements ToHtml
{

    protected $text;

    public function __construct(string $localName, array $attributes, string $text)
    {
        parent::__construct($localName, $attributes);
        $this->text = $text;
    }

    public function getText() : EscapableRawText
    {
        return $this->text;
    }

    public function toHtml() : string
    {
        throw new Exception('Not implemented yet');
    }
}
