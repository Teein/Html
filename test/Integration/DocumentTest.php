<?php
declare(strict_types=1);

namespace Teein\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Teein\Html\Elements\{html};
use function Teein\Html\Document\{document};

class DocumentTest extends TestCase
{
    public function testForDoctype ()
    {
        $ast = document(html()());
        $html = $ast->toHtml();
        $this->assertEquals('<!DOCTYPE html><html></html>', $html);
    }
}
