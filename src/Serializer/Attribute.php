<?php
declare(strict_types=1);

namespace Mammalia\Html\Serializer;

interface Attribute
{
    public function toHtml() : string;
}
