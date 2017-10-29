<?php
declare(strict_types=1);

namespace Teein\Html\Beautifier;

use Teein\Html\VirtualDom\Document;

function beautify(Document $document) : Document
{
    return $document->beautify();
}
