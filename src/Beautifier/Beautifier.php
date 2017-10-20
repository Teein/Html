<?php
declare(strict_types=1);

namespace CommonCrane\Html\Beautifier;

interface Beautifier
{
    public function beautify (int $level = 0) : Beautifier;
}
