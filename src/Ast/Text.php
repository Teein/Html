<?php
declare(strict_types=1);

namespace Mammalia\Html\Ast;

use Mammalia\Html\VirtualDom\Text as TextInterface;

final class Text implements TextInterface
{

    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function toHtml() : string
    {
        return htmlspecialchars($this->text, ENT_HTML5 | ENT_NOQUOTES);
    }

    public function toRawText (string $localName) : string
    {
        $tests = [
            '/<(' . $localName . ')/ium', // test for forbidden opening tags
            '/<\/(' .$localName. ')/ium', // test for forbidden closing tags
            '/<!--/ium'                       // test for forbidden opening comments
        ];
        $replacements = [
            '<\\\$1',
            '<\\/$1',
            '<\\!--'
        ];
        return preg_replace($tests, $replacements, $this->text);
    }
}
