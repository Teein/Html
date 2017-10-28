<?php
declare(strict_types=1);

namespace Teein\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Teein\Html\Elements\{foreign};

class ForeignTest extends TestCase
{
    public function testForDelimiters ()
    {
        $ast = foreign('svg')()();
        $html = $ast->toHtml();
        $this->assertEquals('<svg></svg>', $html);
    }
}
