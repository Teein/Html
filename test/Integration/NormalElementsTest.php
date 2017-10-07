<?php
declare(strict_types=1);

namespace Mammalia\Html\Test\Integration;

use PHPUnit\Framework\TestCase;
use function Mammalia\Html\Elements\{a,abbr,address,aside,article,audio};
use function Mammalia\Html\Elements\{b,bdi,bdo,blockquote,body,button};
use function Mammalia\Html\Elements\{canvas,caption,cite,code,colgroup};
use function Mammalia\Html\Elements\{data,datalist,dd,del,details,dfn,dialog,div,dl,dt};
use function Mammalia\Html\Elements\{em};
use function Mammalia\Html\Elements\{fieldset,figcaption,figure,footer,form};
use function Mammalia\Html\Elements\{h1,h2,h3,h4,h5,h6,head,header,hgroup,html};
use function Mammalia\Html\Elements\{i,iframe,ins};
use function Mammalia\Html\Elements\{kbd};
use function Mammalia\Html\Elements\{label,legend,li};
use function Mammalia\Html\Elements\{main,map,mark,menu,meter};
use function Mammalia\Html\Elements\{nav,noscript};
use function Mammalia\Html\Elements\{object_,ol,optgroup,option,output};
use function Mammalia\Html\Elements\{p,picture,pre,progress,q};
use function Mammalia\Html\Elements\{rp,rt,ruby};
use function Mammalia\Html\Elements\{s,samp,section,select,slot,small,span,strong,sub,summary,sup};
use function Mammalia\Html\Elements\{table,tbody,td,template,tfoot,th,thead,time,tr};
use function Mammalia\Html\Elements\{u,ul};
use function Mammalia\Html\Elements\{var_,video};
use function Mammalia\Html\Elements\{wbr};

class NormalElementsTest extends TestCase
{

    const factories = [
        'a','abbr','address','aside','article','audio',
        'b','bdi','bdo','blockquote','body','button',
        'canvas','caption','cite','code','colgroup',
        'data','datalist','dd','del','details','dfn','dialog','div','dl','dt',
        'em',
        'fieldset','figcaption','figure','footer','form',
        'h1','h2','h3','h4','h5','h6','head','header','hgroup','html',
        'i','iframe','ins',
        'kbd',
        'label','legend','li',
        'main','map','mark','menu','meter',
        'nav','noscript',
        'object_','ol','optgroup','option','output',
        'p','picture','pre','progress','q',
        'rp','rt','ruby',
        's','samp','section','select','slot','small','span','strong','sub','summary','sup',
        'table','tbody','td','template','tfoot','th','thead','time','tr',
        'u','ul',
        'var_','video'
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
