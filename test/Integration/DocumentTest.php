<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Mammalia\Html\Elements\{html};
use function Mammalia\Html\Document\{document};

class DocumentTest extends TestCase
{
    public function testForDoctype ()
    {
        $ast = document(html()());
        $html = $ast->toHtml();
        $this->assertEquals('<!DOCTYPE html><html></html>', $html);
    }
}
