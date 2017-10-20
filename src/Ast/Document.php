<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\VirtualDom\Document as DocumentInterface;
use Mammalia\Html\VirtualDom\Element as ElementInterface;

final class Document implements DocumentInterface
{

    protected $root;

    protected $beautified;

    public function __construct(Element $root, bool $beautified = false)
    {
        $this->root = $root;
        $this->beautified = $beautified;
    }

    public function toHtml () : string
    {
        return "<!DOCTYPE html>" . ($this->beautified ? "\n" : "") . $this->root->toHtml();
    }

    public function beautify (int $level = 0) : Beautifier
    {
        return new Document($this->root->beautify(), true);
    }

    public function getRoot() : ElementInterface
    {
        return $this->root;
    }

    public function setRoot(ElementInterface $root) : DocumentInterface
    {
        return new Document($root, $this->beautified);
    }
}
