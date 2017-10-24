<?php
declare(strict_types=1);

namespace Teein\Html\Attributes;

use Teein\Html\Ast\Attribute;

function unknown(string $name, string $value) : Attribute
{
    return new Attribute($name, $value);
}
