<?php
declare(strict_types=1);

namespace CommonCrane\Html\Serializer;

interface ToRawText
{
    public function toRawText(string $localName) : string;
}
