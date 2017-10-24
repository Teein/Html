<?php
declare(strict_types=1);

namespace Teein\Html\Attributes;

use Teein\Html\Ast\Attribute;

function data_(string $name, string $value) : Attribute
{
    return new Attribute('data-' . $name, $value);
}
