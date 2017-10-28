<?php
declare(strict_types=1);

namespace Teein\Html\Test\Integration;

use PHPUnit\Framework\TestCase;

use function Teein\Html\Attributes\{abbr_,accept,acceptcharset,accesskey,action,allowfullscreen,allowpaymentrequest,allowusermedia,alt,as_,async,autocomplete,autofocus,autoplay,charset,checked,cite_,class_,color,cols,colspan,content,contenteditable,controls,coords,crossorigin,datetime,default_,defer,dir,dirname,disabled,download,draggable,enctype,for_,form_,formaction,formenctype,formmethod,formnovalidate,formtarget,headers,height,hidden,high,href,hreflang,httpequiv,id,inputmode,integrity,is,ismap,itemid,itemprop,itemref,itemscope,itemtype,kind,label_,lang,list_,loop,low,manifest,max,maxlength,media,method,min,minlength,multiple,muted,name,nomodule,nonce,novalidate,odata,open,optimum,pattern,ping,placeholder,playsinline,poster,preload,readonly,referrerpolicy,rel,required,reversed,rows,rowspan,sandbox,scope,selected,shape,size,sizes,slot_,span_,spellcheck,src,srcdoc,srclang,srcset,start,step,style_,tabindex,target,title_,translate,type,typemustmatch,updateviacache,usemap,value,width,workertype,wrap};

class AttributesTest extends TestCase
{
    /**
     * @dataProvider factoryProvider
     */
    public function testToHtml ($factory, $attributeName)
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

    public static function fullyQualifiedName ($factory)
    {
        return "Teein\\Html\\Attributes\\$factory";
    }
}
