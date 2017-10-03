<?php
namespace Mammalia\Html\Serializer;

interface Node
{
    public function toHtml() : string;
}
