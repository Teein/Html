<?php
declare(strict_types=1);

namespace Teein\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Teein\Html\Elements\{custom};

class CustomTest extends TestCase
{
    public function testCustomElement ()
    {
        $ast = custom('custom-element')()();
        $html = $ast->toHtml();
        $this->assertEquals('<custom-element></custom-element>', $html);
    }
}
