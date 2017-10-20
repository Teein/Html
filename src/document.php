<?php
declare(strict_types=1);

namespace CommonCrane\Html\Document;

use CommonCrane\Html\Ast\Document;
use CommonCrane\Html\VirtualDom\Element;

function document (Element $root) : Document
{
    return new Document($root);
}
