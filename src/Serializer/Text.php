<?php
declare(strict_types=1);

namespace Mammalia\Html\Serializer;

interface Text extends Node
{
    public function toHtml() : string;
    /**
     * Encode the text contents of <script> and <style> elements.
     * 
     * The text contents of <script> and <style> use a different ecoding
     * algorithm compared to all other html-elements. For example, an
     * ampersand (&) must not be replaced by the escaping sequence (&amp;).
     *
     * @param string $localName The localname of the container-element in
     *                          in questions. This is always 'script' or
     *                          or 'style'.
     */
    public function toRawText(string $localName) : string;
}
