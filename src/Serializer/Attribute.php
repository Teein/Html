<?php
namespace Mammalia\Html\Serializer;

interface Attribute
{
    public function toHtml() : string;
}
