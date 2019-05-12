<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\ToHtml;

use PHPUnit\Framework\TestCase;

use function Teein\Html\ToHtml\toHtml;
use Teein\Html\VirtualDom\Document;

class ToHtmlTest extends TestCase
{
    /**
     * @dataProvider documentProvider
     */
    public function testToHtml(Document $document, string $expected)
    {
        $actual = toHtml($document);
        $this->assertEquals($expected, $actual);
    }

    public function documentProvider() : array
    {
        return array_map(function ($output) {
            $documentStub = $this->createMock(Document::class);
            $documentStub->method('toHtml')->willReturn($output);
            return [$documentStub, $output];
        }, ['lorem', 'ipsum', 'dolar', 'sit', 'amet']);
    }
}
