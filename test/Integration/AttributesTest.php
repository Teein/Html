<?php
declare(strict_types=1);

namespace CommonCrane\Html\Test\Integration;

use PHPUnit\Framework\TestCase;

use function CommonCrane\Html\Attributes\{abbr,accept,accept_charset,accesskey,action,allowfullscreen,allowpaymentrequest,allowusermedia,alt,as_,async,autocomplete,autofocus,autoplay,charset,checked,cite,class_,color,cols,colspan,content,contenteditable,controls,coords,crossorigin,data,datetime,default_,defer,dir,dirname,disabled,download,draggable,enctype,for_,form,formaction,formenctype,formmethod,formnovalidate,formtarget,headers,height,hidden,high,href,hreflang,http_equiv,id,inputmode,integrity,is,ismap,itemid,itemprop,itemref,itemscope,itemtype,kind,label,lang,list_,loop,low,manifest,max,maxlength,media,method,min,minlength,multiple,muted,name,nomodule,nonce,novalidate,open,optimum,pattern,ping,placeholder,playsinline,poster,preload,readonly,referrerpolicy,rel,required,reversed,rows,rowspan,sandbox,scope,selected,shape,size,sizes,slot,span,spellcheck,src,srcdoc,srclang,srcset,start,step,style,tabindex,target,title,translate,type,typemustmatch,updateviacache,usemap,value,width,workertype,wrap};

class AttributesTest extends TestCase
{
    /**
     * @dataProvider factoryProvider
     */
    public function testToHtml ($factory)
    {            
        $fullyQualifiedFactory = self::fullyQualifiedName($factory);
        $expected = self::exptected($factory);
        $actual = call_user_func($fullyQualifiedFactory, 'value')->toHtml();
        $this->assertEquals($expected, $actual);
    }

    public function factoryProvider()
    {
        return [['abbr'],['accept'],['accept_charset'],['accesskey'],['action'],['allowfullscreen'],['allowpaymentrequest'],['allowusermedia'],['alt'],['as_'],['async'],['autocomplete'],['autofocus'],['autoplay'],['charset'],['checked'],['cite'],['class_'],['color'],['cols'],['colspan'],['content'],['contenteditable'],['controls'],['coords'],['crossorigin'],['data'],['datetime'],['default_'],['defer'],['dir'],['dirname'],['disabled'],['download'],['draggable'],['enctype'],['for_'],['form'],['formaction'],['formenctype'],['formmethod'],['formnovalidate'],['formtarget'],['headers'],['height'],['hidden'],['high'],['href'],['hreflang'],['http_equiv'],['id'],['inputmode'],['integrity'],['is'],['ismap'],['itemid'],['itemprop'],['itemref'],['itemscope'],['itemtype'],['kind'],['label'],['lang'],['list_'],['loop'],['low'],['manifest'],['max'],['maxlength'],['media'],['method'],['min'],['minlength'],['multiple'],['muted'],['name'],['nomodule'],['nonce'],['novalidate'],['open'],['optimum'],['pattern'],['ping'],['placeholder'],['playsinline'],['poster'],['preload'],['readonly'],['referrerpolicy'],['rel'],['required'],['reversed'],['rows'],['rowspan'],['sandbox'],['scope'],['selected'],['shape'],['size'],['sizes'],['slot'],['span'],['spellcheck'],['src'],['srcdoc'],['srclang'],['srcset'],['start'],['step'],['style'],['tabindex'],['target'],['title'],['translate'],['type'],['typemustmatch'],['updateviacache'],['usemap'],['value'],['width'],['workertype'],['wrap']];
    }

    public static function exptected ($factory)
    {
        $attributeName = str_replace('_','-',rtrim($factory, '_'));
        return "$attributeName=\"value\"";;
    }

    public static function fullyQualifiedName ($factory)
    {
        return "CommonCrane\\Html\\Attributes\\$factory";
    }
}
