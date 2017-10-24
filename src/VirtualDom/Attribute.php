<?php
declare(strict_types=1);

namespace Teein\Html\VirtualDom;

use Teein\Html\Serializer\ToHtml;

interface Attribute extends ToHtml
{
    public function getValue() : string;
    public function getName() : string;
    public function setValue(string $value) : Attribute;
    public function setName(string $name) : Attribute;
}
