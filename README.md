
![CommonCrane/Html](resources/header.png)

[![Build Status](https://scrutinizer-ci.com/g/CommonCrane/Html/badges/build.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/CommonCrane/Html/build-status/feature/initial-api-design)
[![Code Coverage](https://scrutinizer-ci.com/g/CommonCrane/Html/badges/coverage.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/CommonCrane/Html/?branch=feature%2Finitial-api-design)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/CommonCrane/Html/badges/quality-score.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/CommonCrane/Html/?branch=feature%2Finitial-api-design)

CommonCrane/Html is a functional templating-engine for PHP inspired by React, XHP and Elm. It's core-features are:

* Ease of use

  Templates are written in ordinary PHP and they closely resemble the syntax of html.

* Robustness

  Templates are immutable and therefore predictable in their outcome when transformed to html. Once created you cannot change the template. However, you can always derive a new template from an existing one with the a fluent getter/setter-api.

* Security

  Unlike most other templating-engines for PHP CommonCrane/Html automatically detects and prevents cross-site-scripting-attacks.

## Getting Started

### Requirements

CommonCrane/Html requires at least PHP 7.1 and Composer. If you haven't installed composer on your system yet, you can do so by following their official installation-instructions at <https://getcomposer.org/doc/00-intro.md>.

### Installation

When your system fullfills the requirements listed above, you can install Composer/Html by typing:

```bash
composer require commoncrane/html
```

or by adding it manually to your composer.json-file:

```json
{
    "require": {
        "commoncrane/html" : "1.0.*"
    }
}
```

### Hello World

```php
<?php
declare(strict_types = 1);

namespace CommonCreane\Html\Example;

use function CommonCrane\Html\{Beautify\beautify,ToHtml\toHtml,Document\document,Text\text};
use function CommonCrane\Html\Elements\{html,head,meta,title,body,h1};
use function CommonCrane\Html\Attributes\{lang,charset};

echo toHtml(beautify(document(
    html(lang('en'))(
      head()(
          meta(charset('utf8')),
          title()(
              text('Hello World!')
          )
      ),
      body()(
          h1()(
             text('Hello World!')
          )
      )
  )
)));
```

CommonCrane/Html features a concise syntax for writing your templates. Hopefully, the example reminds you of ordinary html.

Let's see how CommonCrane/Html syntax is similar to HTML:

* We have tagnames: `html`, `head`, `body`, `h1`, ...
* We have attribtues: `lang`, `charset`, ...

Notice, what is different from html:

* We use parenthesis not angle-brackets and they're placed in different positions
* We don't have closing-tags.
* We can use any PHP-expression inside our templates and it will become evaluated.

There is more to discover in our example:

* Temapltes are minified by default, we use the `beautify`-function to indent our output.
* We use the toHtml-Function to get a string-representation from our abstract syntax tree. 

### Some words an the namespace-imports

CommonCrane/Html does not register any global definitions, that means that you have to import everything you are going to use in your template explicitly at the beginning of your script. Most editors today offer automatic tools to simplify this process. However, some tools find it hard detect functions inside your namespaces. If you want to get up and running you can always include the complete list of functions at the beginning of your file.

```php
<?php
use function CommonCrane\Html\{Beautify\beautify,ToHtml\toHtml,Document\document,Text\text};
use function CommonCrane\Html\Elements\{a,abbr,address,area,article,aside,audio,b,base,bdi,bdo,blockquote,body,br,button,canvas,caption,cite,code,col,colgroup,data,datalist,dd,del,details,dfn,dialog,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,head,header,hgroup,hr,html,i,iframe,img,input,ins,kbd,label,legend,li,link,main,map,mark,math,menu,meta,meter,nav,noscript,object_,ol,optgroup,option,output,p,param,picture,pre,progress,q,rp,rt,ruby,s,samp,script,section,select,slot,small,source,span,strong,style,sub,summary,sup,svg,table,tbody,td,template,textarea,tfoot,th,thead,time,title,tr,track,u,ul,var_,video,wbr};
use function CommonCrane\Html\Attributes\{abbr as abbr_,accept,accept_charset,accesskey,action,allowfullscreen,allowpaymentrequest,allowusermedia,alt,as_,async,autocomplete,autofocus,autoplay,charset,checked,cite as cite_,class_,color,cols,colspan,content,contenteditable,controls,coords,crossorigin,data_, data as data__,datetime,default_,defer,dir,dirname,disabled,download,draggable,enctype,for_,form as form_,formaction,formenctype,formmethod,formnovalidate,formtarget,headers,height,hidden,high,href,hreflang,http_equiv,id,inputmode,integrity,is,ismap,itemid,itemprop,itemref,itemscope,itemtype,kind,label as label_,lang,list_,loop,low,manifest,max,maxlength,media,method,min,minlength,multiple,muted,name,nomodule,nonce,novalidate,open,optimum,pattern,ping,placeholder,playsinline,poster,preload,readonly,referrerpolicy,rel,required,reversed,rows,rowspan,sandbox,scope,selected,shape,size,sizes,slot as slot_,span as span_,spellcheck,src,srcdoc,srclang,srcset,start,step,style as style_,tabindex,target,title as title_,translate,type,typemustmatch,updateviacache,usemap,value,width,workertype,wrap};
```

For readbility we ommit the namespace- and use-clauses in the next examples.

### if then else

Unlike other templating-engines CommonCrane/Html does not introduce special syntax for conditional branches or loops. Instead, we use PHPs built-in language features for these kind of things. However, the functional interface of CommonCrane/Html wants *expressions* not *statements*. For example PHPs `if () {} else {}`-construct is a statement, but the ternary-operator `$cond ? $foo : $bar` is an expression (if you don't like the flaky syntax of the ternary operator, you can always define your own view-helpers, we'll come back to this in a moment).

```php
<?php
echo toHtml(beautify(document(
    html(lang('en')) (
        head()(
            meta(charset ('utf8')),
            title() (
               text('Hello World!')
            )
        ),
        body()(
            h1()(
                (isset($_GET['name'])
                    ? text("Hello {$_GET[name]}!")
                    : text('Hello World!')
                )
            )
        )
    )
)));
```

### Loops

PHPs `for`- and `while`-loops are statements and therefore won't work in CommonCrane\Html. We use the cooler map/reduce-functions to loop:

```php
<?php
echo toHtml(beautify(document(
    html(lang('en'))(
        head()(
            meta(charset('utf8')),
            title()(
                text('Hello World!')
            )
        ),
        body () (
            table () (
              ...array_map( function ($book) {
                  return tr () (
                      td () (text ($book->title)),
                      td () (text ($book->author))
                  )
              }, $books)
            )
        )
    )
)));
```

```php
<?php
function viewBook ($books) {
    return array_map( function ($book) {
        return  tr () (
            td () (text ($book->title)),
            td () (text ($book->author))
        );
    }, $books);
}

echo toHtml(beautify(document(
    html(lang ('en'))(
        head()(
            meta(charset('utf8')),
            title()(
                text('Hello World!')
            )
        ),
        body () (
            table () (
                ...viewBooks($books)
            )
        )
    )
)));
```
