<?php
declare(strict_types=1);

namespace Mammalia\Html\Text;

use Mammalia\Html\Ast\Text;

function text (string $value) : Text
{
    return new Text($value);
}
