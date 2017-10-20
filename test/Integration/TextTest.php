<?php
declare(strict_types=1);

namespace CommonCrane\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function CommonCrane\Html\Text\{text};

class TextTest extends TestCase
{
    public function testText ()
    {
        $ast = text('lorem ipsum');
        $html = $ast->toHtml();
        $this->assertEquals('lorem ipsum', $html);
    }
}
