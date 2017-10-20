[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/CommonCrane/Html/badges/quality-score.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/CommonCrane/Html/?branch=feature%2Finitial-api-design)
[![Code Coverage](https://scrutinizer-ci.com/g/CommonCrane/Html/badges/coverage.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/CommonCrane/Html/?branch=feature%2Finitial-api-design)
[![Build Status](https://scrutinizer-ci.com/g/CommonCrane/Html/badges/build.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/CommonCrane/Html/build-status/feature/initial-api-design)

# CommonCrane/Html

CommonCrane/Html is a functional templating-engine for PHP inspired by React, XHP and Elm. It's core-features are:

* Ease of use

  Templates are written in ordinary PHP and they closely resemble the syntax of html.

* Robustness

  Templates are immutable and therefore predictable in their outcome when transformed to html. Once created you cannot change the template. However, you can always derive a new template from an existing one with the a fluent getter/setter-api.

* Security

  Unlike most other templating-engines for PHP CommonCrane/Html automatically detects and prevents cross-site-scripting-attacks.

## Getting Started

### Requirements

CommonCrane/Html requires at least PHP 7.1 and Composer. If you haven't installed composer on your system yet, you can so by following their official installation-instructions at <https://getcomposer.org/doc/00-intro.md>.

### Installation

When your system fullfills the requirements listed above, you can install Composer/Html by typing:

```bash
composer require commoncrane/html
```

or by adding it manually to your composer.json-file.

### Hello World

```php
<?php
declare(strict_types = 1);

namespace CommonCreane\Html\Example;

use function CommonCrane\Html\Beautify\beautify;
use function CommonCrane\Html\ToHtml\toHtml;
use function CommonCrane\Html\Document\document;
use function CommonCrane\Html\Elements\{html,head,meta,title,body,h1};
use function CommonCrane\Html\Attributes\{lang,charset};
use function CommonCrane\Html\Text\text;

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

### if then else

Unlike other templating-engines CommonCrane/html does not introduce special syntax for conditional branches or loops. Instead, we use PHPs built-in language features for these kind of things. However, the functional interface of CommonCrane/Html wants *expressions* not *statements*. For example PHPs `if () {} else {}`-construct is a statement, but the ternary-operator `$cond ? $foo : $bar` is an expression (if you don't like the flaky syntax of the ternary operator, you can always define your own view-helpers, we'll come back to this later).

```php
<?php
declare(strict_types = 1);

namespace CommonCreane\Html\Example;

use function CommonCrane\Html\Beautify\beautify;
use function CommonCrane\Html\ToHtml\toHtml;
use function CommonCrane\Html\Document\document;
use function CommonCrane\Html\Elements\{html,head,meta,title,body,h1};
use function CommonCrane\Html\Attributes\{lang,charset};
use function CommonCrane\Html\Text\text;

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
declare(strict_types = 1);

namespace CommonCreane\Html\Example;

use function CommonCrane\Html\Beautify\beautify;
use function CommonCrane\Html\ToHtml\toHtml;
use function CommonCrane\Html\Document\document;
use function CommonCrane\Html\Elements\{html,head,meta,title,body,table,tr,td};
use function CommonCrane\Html\Attributes\{lang,charset};
use function CommonCrane\Html\Text\text;

$books = [];

echo toHtml (beautify ( document (
  html (lang ('en')) (
    head () (
      meta (charset ('utf8')),
      title () (
        text ('Hello World!')
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

use Mammut\Html;

$books = [

];

function viewBook ($books) {
  return array_map( function ($book) {
    return  tr () (
      td () (text ($book->title)),
      td () (text ($book->author))
    );
  }, $books);
}

echo show (beautify (
  html (lang ('en')) (
    head () (
      meta (charset ('utf8')),
      title () (
        text ('Hello World!')
      )
    ),
    body () (
      table () (
        ...viewBooks($books)
      )
    )
  )
));
```
