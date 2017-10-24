<?php
declare(strict_types=1);

namespace Teein\Html\Elements;

use Teein\Html\Ast\NormalElement;
use Teein\Html\VirtualDom\Attribute;
use Teein\Html\VirtualDom\Node;

function custom (string $localName) : callable
{
    return function (Attribute ...$attributes) use ($localName) : callable {
        return function (Node ...$childNodes) use ($localName, $attributes) : NormalElement {
            return new NormalElement($localName, $attributes, $childNodes);
        };
    };
}
