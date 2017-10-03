<?php

use PHPUnit\Framework\TestCase;

use function Mammalia\Html\Elements\{table,thead,tbody,tfoot,tr,th,td};
use function Mammalia\Html\Attributes\{id,class_};
use function Mammalia\Html\Text\text;

class NormalElementTest extends TestCase
{
    public function testToHtml()
    {
        $table = table()();
        $tableHtml = $table->toHtml();
        $this->assertEquals($tableHtml, '<table></table>');

        $tableWithAttributes = table (id('test-table'), class_('mammalia', 'test'))();
        $tableWithAttributesHtml = $tableWithAttributes->toHtml();
        $this->assertEquals('<table id="test-table" class="mammalia test"></table>', $tableWithAttributesHtml);

        $tableWithDescendants = table ()(
            thead ()(
                tr ()(
                    th ()(text('Lorem Ipsum'))
                )
            )
        );
        $tableWithDescendantsHtml = $tableWithDescendants->toHtml();
        $this->assertEquals('<table><thead><tr><th>Lorem Ipsum</th></tr></thead></table>', $tableWithDescendantsHtml);
    }
}
