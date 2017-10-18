<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Mammalia\Html\Ast\Document;
use Mammalia\Html\Ast\Element;

class DocumentTest extends TestCase
{
    public function testToHtml()
    {
        $rootStub = $this->createMock(Element::class);
        $rootStub->method('toHtml')->willReturn('<html></html>');
        $document = new Document($rootStub);
        $documentHtml = $document->toHtml();
        $this->assertEquals("<!DOCTYPE html><html></html>", $documentHtml);
    }

    public function testBeautify ()
    {
        $rootStub = $this->createMock(Element::class);
        $rootStub->method('beautify')->willReturn($rootStub);
        $rootStub->method('toHtml')->willReturn("<html>\n</html>");
        $document = new Document($rootStub);
        $documentHtml = $document->beautify()->toHtml();
        $this->assertEquals("<!DOCTYPE html>\n<html>\n</html>", $documentHtml);
    }
}
