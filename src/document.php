<?php
declare(strict_types=1);

namespace Mammalia\Html\Document;

use Mammalia\Html\Ast\Document;
use Mammalia\Html\Ast\Element;

function document (Element $root) : Document
{
    return new Document($root);
}
