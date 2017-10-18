<?php
declare(strict_types=1);

namespace Mammalia\Html\Attributes;

use Mammalia\Html\Ast\Attribute;

function data_(string $name, string $value) : Attribute
{
    return new Attribute('data-' . $name, $value);
}
