<?php
declare(strict_types=1);

namespace Mammalia\Html\Serializer;

interface ToHtml
{
    public function toHtml() : string;
}
