<?php
declare(strict_types=1);

namespace Mammalia\Html\VirtualDom;

use Mammalia\Html\Serializer\ToRawText;
use Mammalia\Html\VirtualDom\Node;

interface Text extends Node, ToRawText
{
}
