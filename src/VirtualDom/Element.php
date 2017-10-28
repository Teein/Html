<?php
declare(strict_types=1);

namespace Teein\Html\VirtualDom;

use Teein\Html\Beautifier\Beautifier;
use Teein\Html\VirtualDom\Node;

interface Element extends Node, Beautifier
{
    public function getLocalName() : string;
    public function getAttributes() : array;
    public function setLocalName(string $localName) : Element;
    public function setAttributes(array $attributes) : Element;
}
