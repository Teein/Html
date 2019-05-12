<?php
declare(strict_types=1);

namespace Teein\Html\Test\Integration;

use PHPUnit\Framework\TestCase;

class AttributesTest extends TestCase
{
    /**
     * @dataProvider factoryProvider
     */
    public function testToHtml($factory, $attributeName)
    {
        $fullyQualifiedFactory = self::fullyQualifiedName($factory);
        $expected = "$attributeName=\"value\"";
        $actual = call_user_func($fullyQualifiedFactory, 'value', 'value')->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function factoryProvider()
    {
        return [
            ['abbr_', 'abbr'],
            ['accept', 'accept'],
            ['acceptcharset', 'accept-charset'],
            ['accesskey', 'accesskey'],
            ['action', 'action'],
            ['allowfullscreen', 'allowfullscreen'],
            ['allowpaymentrequest', 'allowpaymentrequest'],
            ['allowusermedia', 'allowusermedia'],
            ['alt', 'alt'],
            ['as_', 'as'],
            ['async', 'async'],
            ['autocomplete', 'autocomplete'],
            ['autofocus', 'autofocus'],
            ['autoplay', 'autoplay'],
            ['charset', 'charset'],
            ['checked', 'checked'],
            ['cite_', 'cite'],
            ['class_', 'class'],
            ['color', 'color'],
            ['cols', 'cols'],
            ['colspan', 'colspan'],
            ['content', 'content'],
            ['contenteditable', 'contenteditable'],
            ['controls', 'controls'],
            ['coords', 'coords'],
            ['crossorigin', 'crossorigin'],
            ['odata', 'data'],
            ['datetime', 'datetime'],
            ['default_', 'default'],
            ['defer', 'defer'],
            ['dir', 'dir'],
            ['dirname', 'dirname'],
            ['disabled', 'disabled'],
            ['download', 'download'],
            ['draggable', 'draggable'],
            ['enctype', 'enctype'],
            ['for_', 'for'],
            ['form_', 'form'],
            ['formaction', 'formaction'],
            ['formenctype', 'formenctype'],
            ['formmethod', 'formmethod'],
            ['formnovalidate', 'formnovalidate'],
            ['formtarget', 'formtarget'],
            ['headers', 'headers'],
            ['height', 'height'],
            ['hidden', 'hidden'],
            ['high', 'high'],
            ['href', 'href'],
            ['hreflang', 'hreflang'],
            ['httpequiv', 'http-equiv'],
            ['id', 'id'],
            ['inputmode', 'inputmode'],
            ['integrity', 'integrity'],
            ['is', 'is'],
            ['ismap', 'ismap'],
            ['itemid', 'itemid'],
            ['itemprop', 'itemprop'],
            ['itemref', 'itemref'],
            ['itemscope', 'itemscope'],
            ['itemtype', 'itemtype'],
            ['kind', 'kind'],
            ['label_', 'label'],
            ['lang', 'lang'],
            ['list_', 'list'],
            ['loop', 'loop'],
            ['low', 'low'],
            ['manifest', 'manifest'],
            ['max', 'max'],
            ['maxlength', 'maxlength'],
            ['media', 'media'],
            ['method', 'method'],
            ['min', 'min'],
            ['minlength', 'minlength'],
            ['multiple', 'multiple'],
            ['muted', 'muted'],
            ['name', 'name'],
            ['nomodule', 'nomodule'],
            ['nonce', 'nonce'],
            ['novalidate', 'novalidate'],
            ['open', 'open'],
            ['optimum', 'optimum'],
            ['pattern', 'pattern'],
            ['ping', 'ping'],
            ['placeholder', 'placeholder'],
            ['playsinline', 'playsinline'],
            ['poster', 'poster'],
            ['preload', 'preload'],
            ['readonly', 'readonly'],
            ['referrerpolicy', 'referrerpolicy'],
            ['rel', 'rel'],
            ['required', 'required'],
            ['reversed', 'reversed'],
            ['rows', 'rows'],
            ['rowspan', 'rowspan'],
            ['sandbox', 'sandbox'],
            ['scope', 'scope'],
            ['selected', 'selected'],
            ['shape', 'shape'],
            ['size', 'size'],
            ['sizes', 'sizes'],
            ['slot_', 'slot'],
            ['span_', 'span'],
            ['spellcheck', 'spellcheck'],
            ['src', 'src'],
            ['srcdoc', 'srcdoc'],
            ['srclang', 'srclang'],
            ['srcset', 'srcset'],
            ['start', 'start'],
            ['step', 'step'],
            ['style_', 'style'],
            ['tabindex', 'tabindex'],
            ['target', 'target'],
            ['title_', 'title'],
            ['translate', 'translate'],
            ['type', 'type'],
            ['typemustmatch', 'typemustmatch'],
            ['updateviacache', 'updateviacache'],
            ['usemap', 'usemap'],
            ['value', 'value'],
            ['width', 'width'],
            ['workertype', 'workertype'],
            ['wrap', 'wrap']
        ];
    }

    public static function fullyQualifiedName($factory)
    {
        return "Teein\\Html\\Attributes\\$factory";
    }
}
