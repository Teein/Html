# Teein/Html

[![Build Status](https://scrutinizer-ci.com/g/Teein/Html/badges/build.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/Teein/Html/build-status/feature/initial-api-design)
[![Code Coverage](https://scrutinizer-ci.com/g/Teein/Html/badges/coverage.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/Teein/Html/?branch=feature%2Finitial-api-design)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Teein/Html/badges/quality-score.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/Teein/Html/?branch=feature%2Finitial-api-design)

<img src="logo.png" align="right" height="300">

Teein/Html is a virtual-dom-based templating-engine for PHP inspired by React, XHP and Elm. Here are some highlights:

* **No new syntax to learn** Templates are written in ordinary PHP and they closely resemble the syntax of html.
* **Immutable data** Templates are immutable and therefore always predictable. Once created you cannot change a template. However, you can always derive a new template from an existing one with a fluent getter/setter-api.
* **Composable templates** The only way to create templates is to compose them from simpler ones. Composable templates scale with your application without adding to its complexity.
* **Security** Unlike most other templating-engines we automatically detect and prevent most cross-site-scripting-attacks.

## Getting Started

### Requirements

Teein/Html requires at least PHP 7.1 and [Composer](https://getcomposer.org/). If you haven't installed composer on your system yet, you can do so by following their [installation-instructions](https://getcomposer.org/doc/00-intro.md).

### Installation

When your system satisfies the requirements listed above, you can install Teein/Html by typing:

```bash
composer require Teein/Html
```

or by adding it manually to your composer.json-file:

```json
{
    "require": {
        "Teein/Html" : "1.0.*"
    }
}
```

### Hello World

<table>
    <tr>
        <th>Teein/Html</th>
        <th>HTML5</th>
    </tr>
    <tr>
        <td>
            <details>
                <summary><i>Show me the head section of this script</i></summary>

```php
<?php
declare(strict_types = 1);

namespace Teein\Html\Example;

use function Teein\Html\Beautify\beautify;
use function Teein\Html\ToHtml\toHtml;
use function Teein\Html\Document\document;
use function Teein\Html\Text\text;
use function Teein\Html\Elements\{html,head,meta,title,body,h1};
use function Teein\Html\Attributes\{lang,charset};

require __DIR__ . '/vendor/autoload.php';
```

</details>
        </td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>

```php
echo toHtml(beautify(document(
    html(lang('en'))(
        head()(
            meta(charset('utf8')),
            title()(text('Hello World!'))
        ),
        body()(
            h1()(text('Hello World!'))
        )
    )
)));
```
</td>
        <td>

```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8">
        <title>Hello World!</titel>
    </head>
    <body>
        <h1>Hello World!</h1>
    </body>
</html>


```

</td>
    </tr>
</table>

Hopefully, the example reminds you of ordinary HTML5.

Let's see how Teein/Html syntax is similar to HTML5:

* We have tagnames: `html`, `head`, `body`, `h1`, ...
* We have attribtues: `lang`, `charset`, ...

Notice, what is different from HTML5:

* We use parenthesis not angle-brackets and they're placed in different positions.
* We don't have closing-tags.
* We can use any PHP-expression inside our templates and it will become evaluated.
* We need to import our dependencies at the top of our php-file.

There is more to discover in our example:

* Templates are minified by default, we use the `beautify`-function to indent our output.
* We use the `toHtml`-function to get a string-representation from our virtual dom. 

### Composable templates

The "Hello World"-example looks managable, but for real world application templates tend to be much more involved. To cope with the growing complexity of your application we make use of an earth-old concept: composability. The idea is to group simple templates together to get bigger but equally simple templates. For instance, many things in our example look like typical HTML5-boilerplate. Let's see how we could refactor the example so that we can reuse most of the template and adapt the flexible parts to other scenarios.

The primary ingredient for composable templates is the `function`. Here is the roadmap of what we are going to do for refactoring: We will separate the hello-world-template into two functions: Let's call 'em `boilerplate` and `content`. The `boilerplate`-function takes one arguement `$content` and wraps it into a HTML5-skeleton exactly like the one above. The `content`-function does not take any arguements but simply returns the headline. Finally, we're going to glue the two functions together to get the same output as in our orignal example.

~~~php
<?php
declare(strict_types = 1);

namespace Teein\Html\Example;

use Teein\Html\VirtualDom\{Node,Document};
use function Teein\Html\{Beautify\beautify, Document\document};
use function Teein\Html\Elements\{html,head,meta,title,body};
use function Teein\Html\Attributes\{lang,charset};

function boilerplate (Node $content) : Document
{
    return beautify(
        document(
            html(lang('en'))(
            head()(
                meta(charset('utf8')),
                title()(
                    text('Hello World!')
                )
            ),
            body()($content)
        )
    );
}
~~~

Let's have a small look at the new things that are packed in this snippet before we continue with the `content`-function. You probably noticed the type-annotations or type-hints like they're often called in PHP. They're another great feature of Teein/Html. The signature of the function makes clear that it will only accept a single `Node` as its input and it will return a `Document`. A `Node` is either an `Element`, like `h1` or `span`, a `Text` or a `Comment`. All factory functions in our library are type-annotated and they ensure that you don't compose incompatible functions together. This should suffice for the moment, we'll come back to types later. Let's return to our running example. So far we have written the `boilerplate`-function, time to turn to the `content`-function, which should be easy now:

~~~php
<?php
declare(strict_types = 1);

namespace Teein\Html\Example;

use Teein\Html\VirtualDom\Element;
use function Teein\Html\Text\text;
use function Teein\Html\Elements\h1;

function content () : Element
{
    return h1()(text("Hello World!"));
}
~~~

By the way, we sometimes call functions like `boilerplate` and `content` view-helpers. Notice how simple view-helpers are: They're just functions. Mappings from inputs to outputs. There is no abstract base class that we need to inherit or an interface that we must implement. It's just that simple: functions. Now, it should be clear how we can compose `boilerplate` and `content` together to get the same output as from our original hello-world-exmaple. Just to be sure, here it is, our new-born hello-world:

~~~php
<?php
declare(strict_types = 1);

namespace Teein\Html\Example;

use function Teein\Html\ToHtml\toHtml;

echo toHtml(
    boilerplate(
        content()
    )
);
~~~

... functions. Hope you appreciate them right now :)

### Conditional branches

Unlike other templating-engines Teein/Html does not introduce special syntax for conditional branches or loops. Instead, we use PHPs built-in language features for these kind of things. However, the functional interface of Teein/Html wants *expressions* not *statements*. For example PHPs `if () {} else {}`-construct is a statement, but the ternary-operator `$cond ? $foo : $bar` is an expression (if you don't like the flaky syntax of the ternary operator, here is a reminder that you can always define your own view-helpers and give them expressive names).

Let's see how this works in practice. Here is how we would add a personalized greeting to our template. For brevity we're going to modify our existing `content`-function.

```php
function content () {
    return h1() (
        text(
            isset($_GET['name'])
                ? "Hello {$_GET[name]}"
                : "Hello World!"
        )
    )
}
```

Notice, that we didn't put `htmlspecialchars` around `$_GET['name']`. This would be a security issue in most other templating-engines. Teein/Html however automatically escapes any special character and defuses the bomb when the template is rendered. Also, this saves you some typing and let's you focus on the content.

### Loops

The restriction for `if`-statements also holds for `for`- and `while`-loops. We use the cooler `map`/`reduce`-functions to loop. Again, let's have a view at some code. The greeting-example, however, got me bored. So let's think of something fancier, let's make a list view of some of my favourite comics. For this sake, assume we have a model
of a comic, that implements the following interface:

~~~php
interface Comic
{
    public function getTitle() : string;
    public function getSuperhero() : string;
    public function getVillain() : string;
}
~~~

Furthermore, let's assume that an array of such comics is provided in the variable `$comics`. Here is how such a template could look like:

```php
<?php
function comics (array $comics) : Element
{
    return ul () (
        ...array_map(function (Comic $comic) : Element {
            return li () (
                span(class_('title'))(text($comic->getTitle())),
                span(class_('superhero'))(text($comic->getSuperhero())),
                span(class_('villlain'))(text($comic->getVillain()))
            );
        }, $comics)
    )
}
```

Protipp: Nesting anonymous functions can become cumbersome. On the positive site the anonymous function offers us hint where we could split our template into separate view-helpers. Here is a refactored version:

```php
function comic (Comic $comic) : Element {
    return li () (
        span(class_('title'))(text($comic->getTitle())),
        span(class_('superhero'))(text($comic->getSuperhero())),
        span(class_('villlain'))(text($comic->getVillain()))
    );
}

function comics (array $comics) : Element {
    return ul () (
        ...array_map('comic', $comics)
    );
}
```
### Namespaces

Teein/Html does not register any global definitions, that means that you have to import everything you are going to use in your template explicitly at the beginning of your script. Most editors today offer automatic tools to simplify this process. However, some tools find it hard detect functions inside your namespaces. If you are on coffein and cannot wait for better tooling you can always include the complete list of functions at the beginning of your file.

```php
<?php
use function Teein\Html\{Beautify\beautify,ToHtml\toHtml,Document\document,Text\text};
use function Teein\Html\Elements\{a,abbr,address,area,article,aside,audio,b,base,bdi,bdo,blockquote,body,br,button,canvas,caption,cite,code,col,colgroup,data,datalist,dd,del,details,dfn,dialog,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,head,header,hgroup,hr,html,i,iframe,img,input,ins,kbd,label,legend,li,link,main,map,mark,math,menu,meta,meter,nav,noscript,object_,ol,optgroup,option,output,p,param,picture,pre,progress,q,rp,rt,ruby,s,samp,script,section,select,slot,small,source,span,strong,style,sub,summary,sup,svg,table,tbody,td,template,textarea,tfoot,th,thead,time,title,tr,track,u,ul,var_,video,wbr};
use function Teein\Html\Attributes\{abbr as abbr_,accept,accept_charset,accesskey,action,allowfullscreen,allowpaymentrequest,allowusermedia,alt,as_,async,autocomplete,autofocus,autoplay,charset,checked,cite as cite_,class_,color,cols,colspan,content,contenteditable,controls,coords,crossorigin,data_, data as data__,datetime,default_,defer,dir,dirname,disabled,download,draggable,enctype,for_,form as form_,formaction,formenctype,formmethod,formnovalidate,formtarget,headers,height,hidden,high,href,hreflang,http_equiv,id,inputmode,integrity,is,ismap,itemid,itemprop,itemref,itemscope,itemtype,kind,label as label_,lang,list_,loop,low,manifest,max,maxlength,media,method,min,minlength,multiple,muted,name,nomodule,nonce,novalidate,open,optimum,pattern,ping,placeholder,playsinline,poster,preload,readonly,referrerpolicy,rel,required,reversed,rows,rowspan,sandbox,scope,selected,shape,size,sizes,slot as slot_,span as span_,spellcheck,src,srcdoc,srclang,srcset,start,step,style as style_,tabindex,target,title as title_,translate,type,typemustmatch,updateviacache,usemap,value,width,workertype,wrap};
```
