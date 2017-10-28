<?php
declare(strict_types=1);

namespace Teein\Html\ToHtml;

use Teein\Html\VirtualDom\Document;

function toHtml (Document $document) : string
{
    return $document->toHtml();
}
