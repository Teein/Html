<?php
declare(strict_types=1);

namespace Teein\Html\Test\Integration;

use PHPUnit\Framework\TestCase;

class VoidElementsTest extends TestCase
{
    /**
     * @dataProvider factoryProvider
     */
    public function testToHtml($factory)
    {
        $fullyQualifiedFactory = self::fullyQualifiedName($factory);
        $expected = self::exptected($factory);
        $actual = call_user_func_array($fullyQualifiedFactory, [])->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function factoryProvider()
    {
        return [
            ['area'],
            ['base'],
            ['br'],
            ['col'],
            ['embed'],
            ['hr'],
            ['img'],
            ['input'],
            ['link'],
            ['meta'],
            ['param'],
            ['source'],
            ['track'],
            ['wbr']
        ];
    }

    public static function exptected($factory)
    {
        $localName = rtrim($factory, '_');
        return "<$localName>";
    }

    public static function fullyQualifiedName($factory)
    {
        return "Teein\\Html\\Elements\\$factory";
    }
}
