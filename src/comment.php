<?php
declare(strict_types=1);

namespace CommonCrane\Html\Comment;

use CommonCrane\Html\Ast\Comment;

function comment (string $comment) : Comment
{
    return new Comment($comment);
}
