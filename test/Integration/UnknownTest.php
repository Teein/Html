<?php
declare(strict_types=1);

namespace CommonCrane\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function CommonCrane\Html\Attributes\{unknown};

class UnknownTest extends TestCase
{
    public function testUnknownAttribute ()
    {
        $ast = unknown('unknown','value');
        $html = $ast->toHtml();
        $this->assertEquals('unknown="value"', $html);
    }
}
