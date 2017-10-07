<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Mammalia\Html\Elements\{a,abbr,address,aside,article,audio,b,bdi,bdo,blockquote,body,buttoncanvas,caption,cite,code,colgroupdata,datalist,dd,del,details,dfn,dialog,div,dl,dtemfieldset,figcaption,figure,footer,formh1,h2,h3,h4,h5,h6,head,header,hgroup,htmli,iframe,inskbdlabel,legend,limain,map,mark,menu,meternav,noscriptobject_,ol,optgroup,option,outputp,picture,pre,progress,qrp,rt,rubys,samp,section,select,slot,small,span,strong,sub,summary,suptable,tbody,td,template,tfoot,th,thead,time,tru,ulvar_,videowbr};

class NormalElementsTest extends TestCase
{

    const factories = [
        'a','abbr','address','aside','article','audio','b','bdi','bdo','blockquote','body','button','canvas','caption','cite','code','colgroup','data','datalist','dd','del','details','dfn','dialog','div','dl','dt','em','fieldset','figcaption','figure','footer','form','h1','h2','h3','h4','h5','h6','head','header','hgroup','html','i','iframe','ins','kbd','label','legend','li','main','map','mark','menu','meter','nav','noscript','object_','ol','optgroup','option','output','p','picture','pre','progress','q','rp','rt','ruby','s','samp','section','select','slot','small','span','strong','sub','summary','sup','table','tbody','td','template','tfoot','th','thead','time','tr','u','ul','var_','video'
    ];

    public static function toLocalName ($factoryName)
    {
        return rtrim($factoryName, '_');
    }

    public function testLocalNames ()
    {
        $factories = self::factories;
        array_walk($factories, function ($factoryName) {
            $localName = self::toLocalName($factoryName);
            $fullyQualifiedFactory = "Mammalia\\Html\\Elements\\$factoryName";
            $ast = call_user_func_array($fullyQualifiedFactory,[])();
            $html = $ast->toHtml();
            $expected = "<$localName></$localName>";
            $this->assertEquals($expected, $html);
        });
    }
}
