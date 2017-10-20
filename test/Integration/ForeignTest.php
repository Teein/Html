<?php
declare(strict_types=1);

namespace CommonCrane\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function CommonCrane\Html\Elements\{foreign};

class ForeignTest extends TestCase
{
    public function testForDelimiters ()
    {
        $ast = foreign('svg')()();
        $html = $ast->toHtml();
        $this->assertEquals('<svg></svg>', $html);
    }
}
