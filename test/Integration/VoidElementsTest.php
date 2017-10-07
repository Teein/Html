<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Mammalia\Html\Elements\{area,base,br,col,embed,hr,img,input,link,meta,param,source,track,wbr};

class VoidElementsTest extends TestCase
{

    const factories = [
        'area','base','br','col','embed','hr','img','input','link','meta','param','source','track','wbr'
    ];

    public function testLocalNames ()
    {
        $factories = self::factories;
        array_walk($factories, function ($factoryName) {
            $localName = $factoryName;
            $fullyQualifiedFactory = "Mammalia\\Html\\Elements\\$factoryName";
            $ast = call_user_func_array($fullyQualifiedFactory,[]);
            $html = $ast->toHtml();
            $expected = "<$localName>";
            $this->assertEquals($expected, $html);
        });
    }
}
