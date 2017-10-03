<?php
namespace Mammalia\Html\Ast;

use Mammalia\Html\Serializer\ToHtml;

class Text implements ToHtml
{

    protected $text;

    public function __construct(string $value)
    {
        $this->text = $text;
    }

    public function getText() : string
    {
        return $this->text;
    }

    public function toHtml() : string
    {
        return htmlspecialchars($this->text);
    }
}
