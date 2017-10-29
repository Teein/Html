<?php
declare(strict_types=1);

namespace Teein\Html\Comment;

use Teein\Html\Ast\Comment;

function comment(string $comment) : Comment
{
    return new Comment($comment);
}
