<?php
declare(strict_types=1);

namespace CommonCrane\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function CommonCrane\Html\Elements\{html};
use function CommonCrane\Html\Document\{document};

class DocumentTest extends TestCase
{
    public function testForDoctype ()
    {
        $ast = document(html()());
        $html = $ast->toHtml();
        $this->assertEquals('<!DOCTYPE html><html></html>', $html);
    }
}
