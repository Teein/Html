<?php
declare(strict_types=1);

namespace Teein\Html\Text;

use Teein\Html\Ast\Text;

function text (string $value) : Text
{
    return new Text($value);
}
