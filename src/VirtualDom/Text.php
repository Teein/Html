<?php
declare(strict_types=1);

namespace CommonCrane\Html\VirtualDom;

use CommonCrane\Html\Serializer\ToRawText;
use CommonCrane\Html\VirtualDom\Node;

interface Text extends Node, ToRawText
{
    public function getText() : string;
    public function setText(string $text) : Text;
}
