<?php
declare(strict_types=1);

namespace Mammalia\Html\Serializer;

interface Document
{
    public function toHtml() : string;
}
