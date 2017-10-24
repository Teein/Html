<?php
declare(strict_types=1);

namespace Teein\Html\Document;

use Teein\Html\Ast\Document;
use Teein\Html\VirtualDom\Element;

function document (Element $root) : Document
{
    return new Document($root);
}
