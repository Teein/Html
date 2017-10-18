<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\Beautifier\Beautifier;
use Mammalia\Html\Serializer\Document as Serializer;
use Mammalia\Html\Serializer\Element;

final class Document implements Beautifier, Serializer
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
}
