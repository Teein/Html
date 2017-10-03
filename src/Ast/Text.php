<?php
namespace Mammalia\Html\Ast;

use Mammalia\Html\Serializer\Text as Serializer;

class Text implements Serializer
{

    protected $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getText() : string
    {
        return $this->value;
    }

    public function toHtml() : string
    {
        return htmlspecialchars($this->value, ENT_HTML5 | ENT_NOQUOTES);
    }
}
