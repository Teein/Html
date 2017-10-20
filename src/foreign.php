<?php
declare(strict_types=1);

namespace CommonCrane\Html\Elements;

use CommonCrane\Html\Ast\NormalElement;
use CommonCrane\Html\VirtualDom\Attribute;
use CommonCrane\Html\VirtualDom\Node;

function foreign (string $localName) : callable
{
    return function (Attribute ...$attributes) use ($localName) : callable {
        return function (Node ...$childNodes) use ($localName, $attributes) : NormalElement {
            return new NormalElement($localName, $attributes, $childNodes);
        };
    };
}
