<?php
declare(strict_types=1);

namespace CommonCrane\Html\Attributes;

use CommonCrane\Html\Ast\Attribute;

function unknown(string $name, string $value) : Attribute
{
    return new Attribute($name, $value);
}
