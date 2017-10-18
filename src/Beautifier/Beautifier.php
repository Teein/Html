<?php
declare(strict_types=1);

namespace Mammalia\Html\Beautifier;

interface Beautifier
{
    public function beautify (int $level) : Beautifier;
}
