<?php
namespace Mammalia\Html;

use Mammalia\Html\AST\Attribute;
use Mammalia\Html\AST\EscapableRawTextElement;
use Mammalia\Html\AST\NormalElement;
use Mammalia\Html\AST\RawTextElement;
use Mammalia\Html\AST\VoidElement;

/**
 * @link https://html.spec.whatwg.org/#the-a-element
 */
function a(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'a',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-abbr-element
 */
function abbr(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'abbr',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-address-element
 */
function address(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'address',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-applet-element
 */
function applet(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'applet',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-area-element
 */
function area(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'area',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-article-element
 */
function article(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'article',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-aside-element
 */
function aside(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'aside',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-audio-element
 */
function audio(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'audio',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-b-element
 */
function b(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'b',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-base-element
 */
function base(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'base',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-bdi-element
 */
function bdi(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'bdi',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-bdo-element
 */
function bdo(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'bdo',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-blockquote-element
 */
function blockquote(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'blockquote',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-body-element
 */
function body(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'body',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-br-element
 */
function br(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'br',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-button-element
 */
function button(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'button',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-canvas-element
 */
function canvas(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'canvas',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-caption-element
 */
function caption(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'caption',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-cite-element
 */
function cite(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'cite',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-code-element
 */
function code(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'code',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-col-element
 */
function col(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'col',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-colgroup-element
 */
function colgroup(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'colgroup',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-data-element
 */
function data(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'data',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-datalist-element
 */
function datalist(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'datalist',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-dd-element
 */
function dd(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'dd',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-del-element
 */
function del(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'del',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-details-element
 */
function details(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'details',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-dfn-element
 */
function dfn(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'dfn',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-dialog-element
 */
function dialog(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'dialog',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-div-element
 */
function div(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'div',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-dl-element
 */
function dl(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'dl',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-dt-element
 */
function dt(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'dt',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-em-element
 */
function em(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'em',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-embed-element
 */
function embed(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'embed',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-fieldset-element
 */
function fieldset(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'fieldset',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-figcaption-element
 */
function figcaption(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'figcaption',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-figure-element
 */
function figure(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'figure',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-footer-element
 */
function footer(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'footer',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-form-element
 */
function form(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'form',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h1(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'h1',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h2(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'h2',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h3(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'h3',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h4(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'h4',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h5(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'h5',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h6(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'h6',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-head-element
 */
function head(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'head',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-header-element
 */
function header(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'header',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-hgroup-element
 */
function hgroup(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'hgroup',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-hr-element
 */
function hr(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'hr',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-html-element
 */
function html(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'html',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-i-element
 */
function i(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'i',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-iframe-element
 */
function iframe(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'iframe',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-img-element
 */
function img(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'img',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-input-element
 */
function input(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'input',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-ins-element
 */
function ins(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'ins',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-kbd-element
 */
function kbd(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'kbd',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-label-element
 */
function label(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'label',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-legend-element
 */
function legend(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'legend',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-li-element
 */
function li(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'li',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-link-element
 */
function link(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'link',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-main-element
 */
function main(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'main',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-map-element
 */
function map(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'map',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-mark-element
 */
function mark(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'mark',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-marquee-element
 */
function marquee(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'marquee',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-menu-element
 */
function menu(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'menu',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-menuitem-element
 */
function menuitem(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'menuitem',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-meta-element
 */
function meta(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'meta',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-meter-element
 */
function meter(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'meter',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-nav-element
 */
function nav(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'nav',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-noscript-element
 */
function noscript(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'noscript',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-object-element
 */
function object(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'object',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-ol-element
 */
function ol(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'ol',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-optgroup-element
 */
function optgroup(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'optgroup',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-option-element
 */
function option(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'option',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-output-element
 */
function output(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'output',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-p-element
 */
function p(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'p',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-param-element
 */
function param(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'param',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-picture-element
 */
function picture(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'picture',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-pre-element
 */
function pre(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'pre',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-progress-element
 */
function progress(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'progress',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-q-element
 */
function q(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'q',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-rp-element
 */
function rp(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'rp',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-rt-element
 */
function rt(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'rt',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-ruby-element
 */
function ruby(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'ruby',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-s-element
 */
function s(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            's',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-samp-element
 */
function samp(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'samp',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-script-element
 */
function script(Attribtue ...$attribtues) : callable
{
    return function (string $text) use ($attribtues) : RawTextElement {
        return new RawTextElement(
            'script',
            $attribtues,
            $text
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-section-element
 */
function section(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'section',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-select-element
 */
function select(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'select',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-slot-element
 */
function slot(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'slot',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-small-element
 */
function small(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'small',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-source-element
 */
function source(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'source',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-span-element
 */
function span(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'span',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-strong-element
 */
function strong(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'strong',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-style-element
 */
function style(Attribtue ...$attribtues) : callable
{
    return function (string $text) use ($attribtues) : RawTextElement {
        return new RawTextElement(
            'style',
            $attribtues,
            $text
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-sub-and-sup-elements
 */
function sub(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'sub',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-summary-element
 */
function summary(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'summary',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-sub-and-sup-elements
 */
function sup(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'sup',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-table-element
 */
function table(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'table',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-tbody-element
 */
function tbody(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'tbody',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-td-element
 */
function td(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'td',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-template-element
 */
function template(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'template',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-textarea-element
 */
function textarea(Attribtue ...$attribtues) : callable
{
    return function (string $text) use ($attribtues) : EscapableRawTextElement {
        return new EscapableRawTextElement(
            'textarea',
            $attribtues,
            $text
        );
    };
}
/**
 * @link https://html.spec.whatwg.org/#the-tfoot-element
 */
function tfoot(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'tfoot',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-th-element
 */
function th(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'th',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-thead-element
 */
function thead(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'thead',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-time-element
 */
function time(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'time',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-title-element
 */
function title(Attribtue ...$attribtues) : callable
{
    return function (string $text) use ($attribtues) : EscapableRawTextElement {
        return new EscapableRawTextElement(
            'title',
            $attribtues,
            $text
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-tr-element
 */
function tr(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'tr',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-track-element
 */
function track(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'track',
        $attribtues
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-u-element
 */
function u(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'u',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-ul-element
 */
function ul(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'ul',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-var-element
 */
function var_(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'var',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-video-element
 */
function video(Attribtue ...$attribtues) : callable
{
    return function (Node ...$elements) use ($attribtues) : NormalElement {
        return new NormalElement(
            'video',
            $attribtues,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-wbr-element
 */
function wbr(Attribtue ...$attribtues) : VoidElement
{
    return new VoidElement(
        'wbr',
        $attribtues
    );
}
