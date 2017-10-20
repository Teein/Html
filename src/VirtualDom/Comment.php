<?php
declare(strict_types=1);

namespace CommonCrane\Html\VirtualDom;

use CommonCrane\Html\Beautifier\Beautifier;
use CommonCrane\Html\VirtualDom\Node;

interface Comment extends Node, Beautifier
{
    public function getComment() : string;
    public function setComment(string $comment) : Comment;
}
