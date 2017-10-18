<?php
declare(strict_types=1);

namespace Mammalia\Html\Comment;

use Mammalia\Html\Ast\Comment;

function comment (string $comment) : Comment
{
    return new Comment($comment);
}
