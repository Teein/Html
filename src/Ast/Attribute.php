<?php
namespace Mammalia\Html\Ast;

use Mammalia\Html\Serializer\ToHtml;

class Attribute implements ToHtml
{

    protected $name;

    protected $value;

    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getValue() : string
    {
        return $this->value;
    }

    public function toHtml() : string
    {
        $htmlName = htmlspecialchars($this->name, ENT_QUOTES | ENT_HTML5);
        $htmlValue = htmlspecialchars($this->value, ENT_QUOTES | ENT_HTML5);
        return "$htmlName=\"$htmlValue\"";
    }
}
