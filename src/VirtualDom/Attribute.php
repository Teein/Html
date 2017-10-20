<?php
declare(strict_types=1);

namespace CommonCrane\Html\VirtualDom;

use CommonCrane\Html\Serializer\ToHtml;

interface Attribute extends ToHtml
{
    public function getValue() : string;
    public function getName() : string;
    public function setValue(string $value) : Attribute;
    public function setName(string $name) : Attribute;
}
