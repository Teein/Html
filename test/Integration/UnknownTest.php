<?php
declare(strict_types=1);

namespace Teein\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Teein\Html\Attributes\{unknown};

class UnknownTest extends TestCase
{
    public function testUnknownAttribute ()
    {
        $ast = unknown('unknown','value');
        $html = $ast->toHtml();
        $this->assertEquals('unknown="value"', $html);
    }
}
