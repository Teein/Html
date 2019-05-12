<?php
declare(strict_types=1);

namespace Teein\Html\Test\Integration;

use PHPUnit\Framework\TestCase;

class NormalElementsTest extends TestCase
{

    /**
     * @dataProvider factoryProvider
     */
    public function testToHtml($factory)
    {
        $fullyQualifiedFactory = self::fullyQualifiedName($factory);
        $expected = self::exptected($factory);
        $actual = call_user_func_array($fullyQualifiedFactory, [])()->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function factoryProvider()
    {
        return [
            ['a'],
            ['abbr'],
            ['address'],
            ['aside'],
            ['article'],
            ['audio'],
            ['b'],
            ['bdi'],
            ['bdo'],
            ['blockquote'],
            ['body'],
            ['button'],
            ['canvas'],
            ['caption'],
            ['cite'],
            ['code'],
            ['colgroup'],
            ['data'],
            ['datalist'],
            ['dd'],
            ['del'],
            ['details'],
            ['dfn'],
            ['dialog'],
            ['div'],
            ['dl'],
            ['dt'],
            ['em'],
            ['fieldset'],
            ['figcaption'],
            ['figure'],
            ['footer'],
            ['form'],
            ['h1'],
            ['h2'],
            ['h3'],
            ['h4'],
            ['h5'],
            ['h6'],
            ['head'],
            ['header'],
            ['hgroup'],
            ['html'],
            ['i'],
            ['iframe'],
            ['ins'],
            ['kbd'],
            ['label'],
            ['legend'],
            ['li'],
            ['main'],
            ['map'],
            ['mark'],
            ['menu'],
            ['meter'],
            ['nav'],
            ['noscript'],
            ['object_'],
            ['ol'],
            ['optgroup'],
            ['option'],
            ['output'],
            ['p'],
            ['picture'],
            ['pre'],
            ['progress'],
            ['q'],
            ['rp'],
            ['rt'],
            ['ruby'],
            ['s'],
            ['samp'],
            ['section'],
            ['select'],
            ['slot'],
            ['small'],
            ['span'],
            ['strong'],
            ['sub'],
            ['summary'],
            ['sup'],
            ['table'],
            ['tbody'],
            ['td'],
            ['template'],
            ['tfoot'],
            ['th'],
            ['thead'],
            ['time'],
            ['tr'],
            ['u'],
            ['ul'],
            ['var_'],
            ['video']
        ];
    }

    public static function exptected($factory)
    {
        $localName = rtrim($factory, '_');
        return "<$localName></$localName>";
    }

    public static function fullyQualifiedName($factory)
    {
        return "Teein\\Html\\Elements\\$factory";
    }
}
