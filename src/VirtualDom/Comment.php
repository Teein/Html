<?php
declare(strict_types=1);

namespace Mammalia\Html\VirtualDom;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\VirtualDom\Node;

interface Comment extends Node, Beautifier
{
}
