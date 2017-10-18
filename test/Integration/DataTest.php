<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Mammalia\Html\Attributes\{data_};

class DataTest extends TestCase
{
    public function testForPrefix ()
    {
        $ast = data_('name','value');
        $html = $ast->toHtml();
        $this->assertEquals('data-name="value"', $html);
    }
}
