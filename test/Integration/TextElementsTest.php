<?php
declare(strict_types=1);

namespace Teein\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Teein\Html\Elements\title;
use function Teein\Html\Elements\textarea;

class TextElementsTest extends TestCase
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
        return [['title'], ['textarea']];
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
