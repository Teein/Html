<?php
declare(strict_types=1);

namespace Mammalia\Html\Serializer;

interface Comment extends Node
{
    public function toHtml() : string;
}
