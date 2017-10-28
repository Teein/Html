<?php
declare(strict_types=1);

namespace Teein\Html\VirtualDom;

use Teein\Html\Beautifier\Beautifier;
use Teein\Html\VirtualDom\Node;

interface Comment extends Node, Beautifier
{
    public function getComment() : string;
    public function setComment(string $comment) : Comment;
}
