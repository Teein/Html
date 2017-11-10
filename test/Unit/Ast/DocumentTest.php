<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Teein\Html\Ast\Document;
use Teein\Html\Ast\Element;

class DocumentTest extends TestCase
{

    /**
     * @dataProvider toHtmlProvider
     */
    public function testToHtml(Document $document, string $expected)
    {
        $actual = $document->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function toHtmlProvider() : array
    {
        $bareHtml = $this->createMock(Element::class);
        $bareHtml->method('toHtml')->willReturn('<html></html>');
        $classyHtml = $this->createMock(Element::class);
        $classyHtml->method('toHtml')->willReturn('<html class="classy"></html>');
        $junkHtml = $this->createMock(Element::class);
        $junkHtml->method('toHtml')->willReturn('junk');
        return [
            [new Document($bareHtml), "<!DOCTYPE html><html></html>"],
            [new Document($classyHtml), "<!DOCTYPE html><html class=\"classy\"></html>"],
            [new Document($junkHtml), "<!DOCTYPE html>junk"],
        ];
    }

    /**
     * @dataProvider beautifyProvider
     */
    public function testBeautify(Document $document, string $expected)
    {
        $actual = $document->beautify()->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function beautifyProvider() : array
    {
        $root = $this->createMock(Element::class);
        $root->method('beautify')->willReturn($root);
        $root->method('toHtml')->willReturn("<html>\n</html>");
        $document = new Document($root);
        return [
            [$document, "<!DOCTYPE html>\n<html>\n</html>"]
        ];
    }

    /**
     * @dataProvider rootProvider
     */
    public function testGetRoot(Element $expected)
    {
        $document = new Document($expected);
        $actual = $document->getRoot();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider rootProvider
     */
    public function testSetRoot(Element $expected)
    {
        $anyRoot = $this->createMock(Element::class);
        $document = new Document($anyRoot);
        $actual = $document->setRoot($expected)->getRoot();
        $this->assertEquals($expected, $actual);
    }

    public function rootProvider() : array
    {
        return [
            [$this->createMock(Element::class)]
        ];
    }
}
