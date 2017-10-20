[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/CommonCrane/Html/badges/quality-score.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/CommonCrane/Html/?branch=feature%2Finitial-api-design)
[![Code Coverage](https://scrutinizer-ci.com/g/CommonCrane/Html/badges/coverage.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/CommonCrane/Html/?branch=feature%2Finitial-api-design)
[![Build Status](https://scrutinizer-ci.com/g/CommonCrane/Html/badges/build.png?b=feature%2Finitial-api-design)](https://scrutinizer-ci.com/g/CommonCrane/Html/build-status/feature/initial-api-design)

# CommonCrane/Html

CommonCrane/Html is a functional templating-engine for PHP inspired by React, XHP and Elm. It is written for 2017 web-development. It's core-features are:

* No new syntax, just regular PHP.
* Performance
* Interoperability
* Robustness
* Immutable data
* No state

If you are interested how we archieve these goals, you might want to read our fesign-documents and then our architecture-guide. If this is your first contact with CommonCrane/Html we recommend you to read this README first.

## Getting Started

### Hello World

```php
<?php

use CommonCrane\Html;

echo show (beautify (
  html (lang ('en')) (
    head () (
      meta (charset ('utf8')),
      title () (
        text ('Hello World!')
      )
    ),
    body () (
      h1 () (
        text ('Hello World!')
      )
    )
  )
));
```

CommonCrane/Html features a concise syntax for writing your templates. Hopefully, the example reminds you of HTML.

Let's see how CommonCrane/Html syntax is similar to HTML:

* We have tagnames: `html`, `head`, `body`, `h1`, ...
* We have attribtues: `lang`, `charset`, ...

Notice, what is different from HTML:

* We use parenthesis not angle-brackets and they're placed in different positions
* We don't have closing-tags.
* We can use any PHP-expression inside our templates and it will become evaluated.

There is more to discover in oru example:

* CommonCrane-Temapltes are minified by default, we use the `beautify`-function to have a nicer identiation.
* We use the show-Function to print 

### if then else

Unlike other templating-engines CommonCrane/html does not introduce special syntax for conditional branches or loops. Instead, we use PHPs built-in language features for these kind of things. However, the functional interface of CommonCrane/html wants *expressions* not *statements*. For example PHPs `if () {} else {}`-construct is a statement, but the ternary-operator `$cond ? $foo : $bar` is an expression (if you don't like the flaky syntax of the ternary operator, you can always define your own view-helpers).

```php
<?php

use Mammut\Html;

$name = ;

echo show (beautify (
  html (lang ('en')) (
    head () (
      meta (charset ('utf8')),
      title () (
        text ('Hello World!')
      )
    ),
    body () (
      h1 () (
        (isset ($_GET['name'])
            ? text ("Hello {$_GET[name]}!")
            : text ('Hello World!')
        )
      )
    )
  )
));
```

### Loops

PHPs `for`- and `while`-loops are statements and therefore won't work in CommonCrane\templates. We use the cooler map/reduce-functions to loop:

```php
<?php

use CommonCrane\Html;

$books = [

];

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
        ...array_map( function ($book) {
          return tr () (
            td () (text ($book->title)),
            td () (text ($book->author))
          )
        }, $books)
      )
    )
  )
));
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

### Fragments

### Sanitization

### View Helpers

### Custom Elements

### Data Attributes

### SVG / MathML

## Known Conflicts

### Naming conflicts

## Compared to

### Twig / Smarty

### XHP

### raw PHP

## Future

### Constraints

### Function Autoloading

## Architecture

### API / Domain Specific Language

### Virtual DOM / Abstract Syntax Tree
