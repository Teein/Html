<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Mammalia\Html\Text\{text};

class TextTest extends TestCase
{
    public function testLocalNames ()
    {
        $ast = text('lorem ipsum');
        $html = $ast->toHtml();
        $this->assertEquals('lorem ipsum', $html);
    }
}
