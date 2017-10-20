<?php
declare(strict_types=1);

namespace Mammalia\Html\VirtualDom;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\Serializer\ToHtml;
use Mammalia\Html\VirtualDom\Element;

interface Document extends Beautifier, ToHtml
{
    public function getRoot() : Element;
    public function setRoot(Element $root) : Document;
}
