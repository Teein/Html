<?php
declare(strict_types=1);

namespace Teein\Html\VirtualDom;

use Teein\Html\Serializer\ToRawText;
use Teein\Html\VirtualDom\Node;

interface Text extends Node, ToRawText
{
    public function getText() : string;
    public function setText(string $text) : Text;
}
