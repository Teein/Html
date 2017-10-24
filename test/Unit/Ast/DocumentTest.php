<?php
declare(strict_types=1);

namespace Teein\Html\Test\Unit\Ast;

use PHPUnit\Framework\TestCase;
use Teein\Html\Ast\Document;
use Teein\Html\Ast\Element;

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

    public function testGetRoot()
    {
        $rootStub = $this->createMock(Element::class);
        $document = new Document($rootStub);
        $this->assertEquals($rootStub, $document->getRoot());
    }

    public function testSetComment()
    {
        $rootBefore = $this->createMock(Element::class);
        $rootAfter = $this->createMock(Element::class);
        $documentBefore = new Document($rootBefore);
        $documentAfter = $documentBefore->setRoot($rootAfter);
        $this->assertEquals($rootAfter, $documentAfter->getRoot());
    }
}
