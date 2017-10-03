<?php
namespace Mammalia\Html\Ast;

use Mammalia\Html\Serializer\ToHtml;

class AttributeList implements ToHtml
{

    protected $name;

    protected $values;

    public function __construct(string $name, array $values)
    {
        $this->name = $name;
        $this->values = $values;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getValues() : string
    {
        return $this->values;
    }

    public function toHtml() : string
    {
        $htmlName = htmlspecialchars($this->name, ENT_QUOTES | ENT_HTML5);
        $htmlValue = join(' ', array_map(
            function ($value) {
                return htmlspecialchars($value, ENT_QUOTES | ENT_HTML5);
            },
            $this->values
        ));
        return "$htmlName=\"$htmlValue\"";
    }
}
