<?php
declare(strict_types=1);

namespace CommonCrane\Html\VirtualDom;

use CommonCrane\Html\Beautifier\Beautifier;
use CommonCrane\Html\Serializer\ToHtml;
use CommonCrane\Html\VirtualDom\Element;

interface Document extends Beautifier, ToHtml
{
    public function getRoot() : Element;
    public function setRoot(Element $root) : Document;
}
