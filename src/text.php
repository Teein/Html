<?php
declare(strict_types=1);

namespace CommonCrane\Html\Text;

use CommonCrane\Html\Ast\Text;

function text (string $value) : Text
{
    return new Text($value);
}
