<?php
declare(strict_types=1);

namespace Mammalia\Html\Elements;

use Mammalia\Html\Ast\NormalElement;
use Mammalia\Html\Ast\Attribute;
use Mammalia\Html\Serializer\Node;

function custom (string $localName) : callable
{
    return function (Attribute ...$attributes) use ($localName) : callable {
        return function (Node ...$childNodes) use ($localName, $attributes) : NormalElement {
            return new NormalElement($localName, $attributes, $childNodes);
        };
    };
}
