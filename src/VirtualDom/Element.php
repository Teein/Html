<?php
declare(strict_types=1);

namespace CommonCrane\Html\VirtualDom;

use CommonCrane\Html\Beautifier\Beautifier;
use CommonCrane\Html\VirtualDom\Node;

interface Element extends Node, Beautifier
{
    public function getLocalName() : string;
    public function getAttributes() : array;
    public function setLocalName(string $localName) : Element;
    public function setAttributes(array $attributes) : Element;
}
