<?php
declare(strict_types=1);

namespace Teein\Html\VirtualDom;

use Teein\Html\Beautifier\Beautifier;
use Teein\Html\Serializer\ToHtml;
use Teein\Html\VirtualDom\Element;

interface Document extends Beautifier, ToHtml
{
    public function getRoot() : Element;
    public function setRoot(Element $root) : Document;
}
