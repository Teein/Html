<?php
declare(strict_types=1);

namespace Mammalia\Html\Attributes;

use Mammalia\Html\Ast\Attribute;

function unknown(string $name, string $value) : Attribute
{
    return new Attribute($name, $value);
}
