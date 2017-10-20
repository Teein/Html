<?php
declare(strict_types=1);

namespace CommonCrane\Html\Serializer;

interface ToHtml
{
    public function toHtml() : string;
}
