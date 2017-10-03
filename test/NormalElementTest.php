<?php

use PHPUnit\Framework\TestCase;
use Mammalia\Html\Ast\NormalElement;

use function Mammalia\Html\table;
use function Mammalia\Html\thead;
use function Mammalia\Html\tbody;
use function Mammalia\Html\tfoot;
use function Mammalia\Html\tr;
use function Mammalia\Html\th;
use function Mammalia\Html\td;

class RawTextElementTest extends TestCase
{
    public function testToHtml()
    {
        $table = table()();
        $tableHtml = $table->toHtml();
        $this->assertEquals($tableHtml, '<table></table>');

        $tableWithAttributes = table (id('test-table'), classList('mammalia', 'test'))();
        $tableWithAttributesHtml = $table->toHtml();
        $this->assertEquals($tableWithAttributesHtml, '<table id="test-table" class="mammalia test"></table>');

        $tableWithDescendants = table ()(
            thead ()(
                tr ()(
                    th ()(text('Lorem')),
                    th ()(text('ipsum')),
                    th ()(text('dolor'))
                )
            ),
            tbody ()(
                tr ()(
                    td ()(text('sit')),
                    td ()(text('amet')),
                    td ()(text('consectetur'))
                ),
                tr ()(
                    th ()(text('adipiscing')),
                    th ()(text('elit')),
                    th ()(text('sed'))
                ),
                tr ()(
                    th ()(text('do')),
                    th ()(text('eiusmod')),
                    th ()(text('tempor'))
                )
            ),
            tfoot ()(
                tr ()(
                    td ()(text('incididunt')),
                    td ()(text('ut')),
                    td ()(text('labore'))
                )
            )
        );
        $tableWithDescendantsHtml = $tableWithDescendants->toHtml();
        $this->assertEquals($tableWithDescendants, '<table><thead><tr><th></th><th></th><th></th></tr>');
    }
}
