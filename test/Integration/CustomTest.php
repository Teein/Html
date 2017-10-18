<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Mammalia\Html\Elements\{custom};

class CustomTest extends TestCase
{
    public function testCustomElement ()
    {
        $ast = custom('custom-element')()();
        $html = $ast->toHtml();
        $this->assertEquals('<custom-element></custom-element>', $html);
    }
}
