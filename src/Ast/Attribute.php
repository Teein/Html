<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\VirtualDom\Attribute as AttributeInterface;

final class Attribute implements AttributeInterface
{

    protected $name;

    protected $value;

    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function toHtml() : string
    {
        $htmlName = htmlspecialchars($this->name, ENT_QUOTES | ENT_HTML5);
        $htmlValue = htmlspecialchars($this->value, ENT_QUOTES | ENT_HTML5);
        return "$htmlName=\"$htmlValue\"";
    }
}
