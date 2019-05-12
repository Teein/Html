<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\ToHtml;

use PHPUnit\Framework\TestCase;

use function Teein\Html\Beautifier\beautify;
use Teein\Html\VirtualDom\Document;

class BeautifyTest extends TestCase
{
    /**
     * @dataProvider documentProvider
     */
    public function testBeautify(Document $document, Document $expected)
    {
        $actual = beautify($document);
        $this->assertEquals($expected, $actual);
    }

    public function documentProvider() : array
    {
        $original = $this->createMock(Document::class);
        $beautified = $this->createMock(Document::class);
        $original->method('beautify')->willReturn($beautified);
        return [[$original, $beautified]];
    }
}
