<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Mammalia\Html\Elements\{title,textarea};

class TextElementsTest extends TestCase
{

    const factories = ['title', 'textarea'];

    public function testLocalNames ()
    {
        $factories = self::factories;
        array_walk($factories, function ($factoryName) {
            $localName = $factoryName;
            $fullyQualifiedFactory = "Mammalia\\Html\\Elements\\$factoryName";
            $ast = call_user_func_array($fullyQualifiedFactory,[])();
            $html = $ast->toHtml();
            $expected = "<$localName></$localName>";
            $this->assertEquals($expected, $html);
        });
    }
}
