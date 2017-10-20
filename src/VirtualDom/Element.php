<?php
declare(strict_types=1);

namespace Mammalia\Html\VirtualDom;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\VirtualDom\Node;

interface Element extends Node, Beautifier
{
    public function getLocalName() : string;
    public function getAttributes() : array;
    public function setLocalName(string $localName) : Element;
    public function setAttributes(array $attributes) : Element;
}
