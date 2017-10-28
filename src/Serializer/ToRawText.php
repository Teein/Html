<?php
declare(strict_types=1);

namespace Teein\Html\Serializer;

interface ToRawText
{
    public function toRawText(string $localName) : string;
}
