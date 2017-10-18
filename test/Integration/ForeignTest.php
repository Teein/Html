<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Mammalia\Html\Elements\{foreign};

class ForeignTest extends TestCase
{
    public function testForDelimiters ()
    {
        $ast = foreign('svg')()();
        $html = $ast->toHtml();
        $this->assertEquals('<svg></svg>', $html);
    }
}
