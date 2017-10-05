<?php
namespace Mammalia\Html\Elements;

use Mammalia\Html\Serializer\Attribute;
use Mammalia\Html\Serializer\Node;
use Mammalia\Html\Serializer\Text;
use Mammalia\Html\Ast\NormalElement;
use Mammalia\Html\Ast\TextElement;
use Mammalia\Html\Ast\RawTextElement;
use Mammalia\Html\Ast\VoidElement;

/**
 * @link https://html.spec.whatwg.org/#the-a-element
 */
function a(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'a',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-abbr-element
 */
function abbr(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'abbr',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-address-element
 */
function address(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'address',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-applet-element
 */
function applet(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'applet',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-area-element
 */
function area(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'area',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-article-element
 */
function article(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'article',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-aside-element
 */
function aside(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'aside',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-audio-element
 */
function audio(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'audio',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-b-element
 */
function b(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'b',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-base-element
 */
function base(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'base',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-bdi-element
 */
function bdi(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'bdi',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-bdo-element
 */
function bdo(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'bdo',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-blockquote-element
 */
function blockquote(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'blockquote',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-body-element
 */
function body(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'body',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-br-element
 */
function br(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'br',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-button-element
 */
function button(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'button',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-canvas-element
 */
function canvas(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'canvas',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-caption-element
 */
function caption(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'caption',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-cite-element
 */
function cite(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'cite',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-code-element
 */
function code(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'code',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-col-element
 */
function col(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'col',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-colgroup-element
 */
function colgroup(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'colgroup',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-data-element
 */
function data(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'data',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-datalist-element
 */
function datalist(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'datalist',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-dd-element
 */
function dd(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'dd',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-del-element
 */
function del(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'del',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-details-element
 */
function details(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'details',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-dfn-element
 */
function dfn(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'dfn',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-dialog-element
 */
function dialog(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'dialog',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-div-element
 */
function div(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'div',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-dl-element
 */
function dl(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'dl',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-dt-element
 */
function dt(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'dt',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-em-element
 */
function em(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'em',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-embed-element
 */
function embed(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'embed',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-fieldset-element
 */
function fieldset(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'fieldset',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-figcaption-element
 */
function figcaption(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'figcaption',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-figure-element
 */
function figure(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'figure',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-footer-element
 */
function footer(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'footer',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-form-element
 */
function form(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'form',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h1(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'h1',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h2(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'h2',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h3(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'h3',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h4(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'h4',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h5(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'h5',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-h1,-h2,-h3,-h4,-h5,-and-h6-elements
 */
function h6(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'h6',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-head-element
 */
function head(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'head',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-header-element
 */
function header(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'header',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-hgroup-element
 */
function hgroup(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'hgroup',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-hr-element
 */
function hr(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'hr',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-html-element
 */
function html(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'html',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-i-element
 */
function i(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'i',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-iframe-element
 */
function iframe(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'iframe',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-img-element
 */
function img(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'img',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-input-element
 */
function input(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'input',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-ins-element
 */
function ins(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'ins',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-kbd-element
 */
function kbd(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'kbd',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-label-element
 */
function label(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'label',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-legend-element
 */
function legend(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'legend',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-li-element
 */
function li(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'li',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-link-element
 */
function link(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'link',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-main-element
 */
function main(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'main',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-map-element
 */
function map(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'map',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-mark-element
 */
function mark(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'mark',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-marquee-element
 */
function marquee(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'marquee',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-menu-element
 */
function menu(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'menu',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-menuitem-element
 */
function menuitem(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'menuitem',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-meta-element
 */
function meta(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'meta',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-meter-element
 */
function meter(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'meter',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-nav-element
 */
function nav(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'nav',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-noscript-element
 */
function noscript(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'noscript',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-object-element
 */
function object(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'object',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-ol-element
 */
function ol(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'ol',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-optgroup-element
 */
function optgroup(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'optgroup',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-option-element
 */
function option(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'option',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-output-element
 */
function output(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'output',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-p-element
 */
function p(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'p',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-param-element
 */
function param(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'param',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-picture-element
 */
function picture(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'picture',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-pre-element
 */
function pre(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'pre',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-progress-element
 */
function progress(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'progress',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-q-element
 */
function q(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'q',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-rp-element
 */
function rp(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'rp',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-rt-element
 */
function rt(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'rt',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-ruby-element
 */
function ruby(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'ruby',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-s-element
 */
function s(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            's',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-samp-element
 */
function samp(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'samp',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-script-element
 */
function script(Attribute ...$attributes) : callable
{
    return function (Text $text) use ($attributes) : RawTextElement {
        return new RawTextElement(
            'script',
            $attributes,
            $text
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-section-element
 */
function section(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'section',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-select-element
 */
function select(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'select',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-slot-element
 */
function slot(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'slot',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-small-element
 */
function small(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'small',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-source-element
 */
function source(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'source',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-span-element
 */
function span(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'span',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-strong-element
 */
function strong(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'strong',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-style-element
 */
function style(Attribute ...$attributes) : callable
{
    return function (Text $text) use ($attributes) : RawTextElement {
        return new RawTextElement(
            'style',
            $attributes,
            $text
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-sub-and-sup-elements
 */
function sub(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'sub',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-summary-element
 */
function summary(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'summary',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-sub-and-sup-elements
 */
function sup(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'sup',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-table-element
 */
function table(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'table',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-tbody-element
 */
function tbody(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'tbody',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-td-element
 */
function td(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'td',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-template-element
 */
function template(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'template',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-textarea-element
 */
function textarea(Attribute ...$attributes) : callable
{
    return function (Text $text) use ($attributes) : TextElement {
        return new TextElement(
            'textarea',
            $attributes,
            $text
        );
    };
}
/**
 * @link https://html.spec.whatwg.org/#the-tfoot-element
 */
function tfoot(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'tfoot',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-th-element
 */
function th(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'th',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-thead-element
 */
function thead(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'thead',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-time-element
 */
function time(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'time',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-title-element
 */
function title(Attribute ...$attributes) : callable
{
    return function (Text $text) use ($attributes) : TextElement {
        return new TextElement(
            'title',
            $attributes,
            $text
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-tr-element
 */
function tr(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'tr',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-track-element
 */
function track(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'track',
        $attributes
    );
}

/**
 * @link https://html.spec.whatwg.org/#the-u-element
 */
function u(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'u',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-ul-element
 */
function ul(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'ul',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-var-element
 */
function var_(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'var',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-video-element
 */
function video(Attribute ...$attributes) : callable
{
    return function (Node ...$elements) use ($attributes) : NormalElement {
        return new NormalElement(
            'video',
            $attributes,
            $elements
        );
    };
}

/**
 * @link https://html.spec.whatwg.org/#the-wbr-element
 */
function wbr(Attribute ...$attributes) : VoidElement
{
    return new VoidElement(
        'wbr',
        $attributes
    );
}
