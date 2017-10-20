<?php
declare(strict_types=1);

namespace CommonCrane\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function CommonCrane\Html\Elements\{script,style};

class RawTextElementsTest extends TestCase
{

    /**
     * @dataProvider factoryProvider
     */
    public function testToHtml ($factory)
    {            
        $fullyQualifiedFactory = self::fullyQualifiedName($factory);
        $expected = self::exptected($factory);
        $actual = call_user_func_array($fullyQualifiedFactory,[])()->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function factoryProvider()
    {
        return [['script'], ['style']];
    }

    public static function exptected ($factory)
    {
        $localName = rtrim($factory, '_');
        return "<$localName></$localName>";
    }

    public static function fullyQualifiedName ($factory)
    {
        return "CommonCrane\\Html\\Elements\\$factory";
    }
}
