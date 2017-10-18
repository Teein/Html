<?php
declare(strict_types=1);

namespace Mammalia\Html\VirtualDom;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\Serializer\ToHtml;

interface Document extends Beautifier, ToHtml
{
}
