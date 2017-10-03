<?php
namespace Mammalia\Html\Attributes;

use Mammalia\Html\Ast\Attribute;
use Mammalia\Html\Ast\AttributeList;

/**
 * @link https://html.spec.whatwg.org/#attr-th-abbr
 */
function abbr(string $value) : Attribute
{
    return new Attribute('abbr', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-input-accept
 */
function accept(string $value) : Attribute
{
    return new Attribute('accept', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-form-accept-charset
 */
function acceptCharset(string $value) : Attribute
{
    return new Attribute('accept-charset', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fs-action
 */
function action(string $value) : Attribute
{
    return new Attribute('action', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-iframe-allowfullscreen
 */
function allowfullscreen(string $value) : Attribute
{
    return new Attribute('allowfullscreen', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-iframe-allowpaymentrequest
 */
function allowpaymentrequest(string $value) : Attribute
{
    return new Attribute('allowpaymentrequest', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-iframe-allowusermedia
 */
function allowusermedia(string $value) : Attribute
{
    return new Attribute('allowusermedia', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-img-alt
 */
function alt(string $value) : Attribute
{
    return new Attribute('alt', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-link-as
 */
function as_(string $value) : Attribute
{
    return new Attribute('as', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-script-async
 */
function async(string $value) : Attribute
{
    return new Attribute('async', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fe-autocomplete
 */
function autocomplete(string $value) : Attribute
{
    return new Attribute('autocomplete', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fe-autofocus
 */
function autofocus(string $value) : Attribute
{
    return new Attribute('autofocus', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-media-autoplay
 */
function autoplay(string $value) : Attribute
{
    return new Attribute('autoplay', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fe-autocomplete-billing
 */
function billing(string $value) : Attribute
{
    return new Attribute('billing', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-meta-charset
 */
function charset(string $value) : Attribute
{
    return new Attribute('charset', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-menuitem-checked
 */
function checked(string $value) : Attribute
{
    return new Attribute('checked', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-area-shape-keyword-circ
 */
function circ(string $value) : Attribute
{
    return new Attribute('circ', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-area-shape-keyword-circle
 */
function circle(string $value) : Attribute
{
    return new Attribute('circle', $value);
}

/**
 * @link https://html.spec.whatwg.org/#classes
 */
function class_(string ...$values) : AttributeList
{
    return new AttributeList('class', $values);
}


/**
 * @link https://html.spec.whatwg.org/#attr-mod-cite
 */
function cite(string $value) : Attribute
{
    return new Attribute('cite', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-link-color
 */
function color(string $value) : Attribute
{
    return new Attribute('color', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-textarea-cols
 */
function cols(string $value) : Attribute
{
    return new Attribute('cols', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-tdth-colspan
 */
function colspan(string $value) : Attribute
{
    return new Attribute('colspan', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-meta-content
 */
function content(string $value) : Attribute
{
    return new Attribute('content', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-contenteditable
 */
function contenteditable(string $value) : Attribute
{
    return new Attribute('contenteditable', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-media-controls
 */
function controls(string $value) : Attribute
{
    return new Attribute('controls', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-area-coords
 */
function coords(string $value) : Attribute
{
    return new Attribute('coords', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-media-crossorigin
 */
function crossorigin(string $value) : Attribute
{
    return new Attribute('crossorigin', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-object-data
 */
function data(string $value) : Attribute
{
    return new Attribute('data', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-time-datetime
 */
function datetime(string $value) : Attribute
{
    return new Attribute('datetime', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-menuitem-default
 */
function default_(string $value) : Attribute
{
    return new Attribute('default', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-script-defer
 */
function defer(string $value) : Attribute
{
    return new Attribute('defer', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-marquee-direction
 */
function direction(string $value) : Attribute
{
    return new Attribute('direction', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fe-dirname
 */
function dirname(string $value) : Attribute
{
    return new Attribute('dirname', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-option-disabled
 */
function disabled(string $value) : Attribute
{
    return new Attribute('disabled', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-hyperlink-download
 */
function download(string $value) : Attribute
{
    return new Attribute('download', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fs-enctype
 */
function enctype(string $value) : Attribute
{
    return new Attribute('enctype', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-output-for
 */
function for_(string ...$values) : AttributeList
{
    return new AttributeList('for', $values);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fae-form
 */
function form(string $value) : Attribute
{
    return new Attribute('form', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fs-formaction
 */
function formaction(string $value) : Attribute
{
    return new Attribute('formaction', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fs-formenctype
 */
function formenctype(string $value) : Attribute
{
    return new Attribute('formenctype', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fs-formmethod
 */
function formmethod(string $value) : Attribute
{
    return new Attribute('formmethod', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fs-formnovalidate
 */
function formnovalidate(string $value) : Attribute
{
    return new Attribute('formnovalidate', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fs-formtarget
 */
function formtarget(string $value) : Attribute
{
    return new Attribute('formtarget', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-tdth-headers
 */
function headers(string $value) : Attribute
{
    return new Attribute('headers', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-canvas-height
 */
function height(string $value) : Attribute
{
    return new Attribute('height', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-meter-high
 */
function high(string $value) : Attribute
{
    return new Attribute('high', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-link-href
 */
function href(string $value) : Attribute
{
    return new Attribute('href', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-hyperlink-hreflang
 */
function hreflang(string $value) : Attribute
{
    return new Attribute('hreflang', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-meta-http-equiv
 */
function httpEquiv(string $value) : Attribute
{
    return new Attribute('http-equiv', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-menuitem-icon
 */
function icon(string $value) : Attribute
{
    return new Attribute('icon', $value);
}

/**
 * @link https://html.spec.whatwg.org/#the-id-attribute
 */
function id(string $value) : Attribute
{
    return new Attribute('id', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fe-inputmode
 */
function inputmode(string $value) : Attribute
{
    return new Attribute('inputmode', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-link-integrity
 */
function integrity(string $value) : Attribute
{
    return new Attribute('integrity', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-is
 */
function is(string $value) : Attribute
{
    return new Attribute('is', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-img-ismap
 */
function ismap(string $value) : Attribute
{
    return new Attribute('ismap', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-track-kind
 */
function kind(string $value) : Attribute
{
    return new Attribute('kind', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-option-label
 */
function label(string $value) : Attribute
{
    return new Attribute('label', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-lang
 */
function lang(string $value) : Attribute
{
    return new Attribute('lang', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-marquee-direction-left
 */
function left(string $value) : Attribute
{
    return new Attribute('left', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-input-list
 */
function list_(string $value) : Attribute
{
    return new Attribute('list', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-media-loop
 */
function loop(string $value) : Attribute
{
    return new Attribute('loop', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-meter-low
 */
function low(string $value) : Attribute
{
    return new Attribute('low', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-html-manifest
 */
function manifest(string $value) : Attribute
{
    return new Attribute('manifest', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-input-max
 */
function max(string $value) : Attribute
{
    return new Attribute('max', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-textarea-maxlength
 */
function maxlength(string $value) : Attribute
{
    return new Attribute('maxlength', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-source-media
 */
function media(string $value) : Attribute
{
    return new Attribute('media', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fs-method
 */
function method(string $value) : Attribute
{
    return new Attribute('method', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-meter-min
 */
function min(string $value) : Attribute
{
    return new Attribute('min', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-textarea-minlength
 */
function minlength(string $value) : Attribute
{
    return new Attribute('minlength', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-select-multiple
 */
function multiple(string $value) : Attribute
{
    return new Attribute('multiple', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-media-muted
 */
function muted(string $value) : Attribute
{
    return new Attribute('muted', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-meta-name
 */
function name(string $value) : Attribute
{
    return new Attribute('name', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-area-nohref
 */
function nohref(string $value) : Attribute
{
    return new Attribute('nohref', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-script-nomodule
 */
function nomodule(string $value) : Attribute
{
    return new Attribute('nomodule', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-script-nonce
 */
function nonce(string $value) : Attribute
{
    return new Attribute('nonce', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-media-preload-none
 */
function none(string $value) : Attribute
{
    return new Attribute('none', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fs-novalidate
 */
function novalidate(string $value) : Attribute
{
    return new Attribute('novalidate', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fe-autocomplete-off
 */
function off(string $value) : Attribute
{
    return new Attribute('off', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fe-autocomplete-on
 */
function on(string $value) : Attribute
{
    return new Attribute('on', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-dialog-open
 */
function open(string $value) : Attribute
{
    return new Attribute('open', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-meter-optimum
 */
function optimum(string $value) : Attribute
{
    return new Attribute('optimum', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-input-pattern
 */
function pattern(string $value) : Attribute
{
    return new Attribute('pattern', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-textarea-placeholder
 */
function placeholder(string $value) : Attribute
{
    return new Attribute('placeholder', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-video-playsinline
 */
function playsinline(string $value) : Attribute
{
    return new Attribute('playsinline', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-video-poster
 */
function poster(string $value) : Attribute
{
    return new Attribute('poster', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-media-preload
 */
function preload(string $value) : Attribute
{
    return new Attribute('preload', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-menuitem-type-state-radio
 */
function Radio(string $value) : Attribute
{
    return new Attribute('Radio', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-menuitem-radiogroup
 */
function radiogroup(string $value) : Attribute
{
    return new Attribute('radiogroup', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-textarea-readonly
 */
function readonly(string $value) : Attribute
{
    return new Attribute('readonly', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-hyperlink-referrerpolicy
 */
function referrerpolicy(string $value) : Attribute
{
    return new Attribute('referrerpolicy', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-hyperlink-rel
 */
function rel(string ...$values) : AttributeList
{
    return new AttributeList('rel', $values);
}

/**
 * @link https://html.spec.whatwg.org/#attr-input-required
 */
function required(string $value) : Attribute
{
    return new Attribute('required', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-ol-reversed
 */
function reversed(string $value) : Attribute
{
    return new Attribute('reversed', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-textarea-rows
 */
function rows(string $value) : Attribute
{
    return new Attribute('rows', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-tdth-rowspan
 */
function rowspan(string $value) : Attribute
{
    return new Attribute('rowspan', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-iframe-sandbox
 */
function sandbox(string ...$values) : AttributeList
{
    return new AttributeList('sandbox', $values);
}

/**
 * @link https://html.spec.whatwg.org/#attr-th-scope
 */
function scope(string $value) : Attribute
{
    return new Attribute('scope', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-option-selected
 */
function selected(string $value) : Attribute
{
    return new Attribute('selected', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-area-shape
 */
function shape(string $value) : Attribute
{
    return new Attribute('shape', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-fe-autocomplete-shipping
 */
function shipping(string $value) : Attribute
{
    return new Attribute('shipping', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-select-size
 */
function size(string $value) : Attribute
{
    return new Attribute('size', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-source-sizes
 */
function sizes(string ...$values) : AttributeList
{
    return new AttributeList('sizes', $values);
}

/**
 * @link https://html.spec.whatwg.org/#attr-slot
 */
function slot(string $value) : Attribute
{
    return new Attribute('slot', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-colgroup-span
 */
function span(string $value) : Attribute
{
    return new Attribute('span', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-spellcheck
 */
function spellcheck(string $value) : Attribute
{
    return new Attribute('spellcheck', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-media-src
 */
function src(string $value) : Attribute
{
    return new Attribute('src', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-iframe-srcdoc
 */
function srcdoc(string $value) : Attribute
{
    return new Attribute('srcdoc', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-track-srclang
 */
function srclang(string $value) : Attribute
{
    return new Attribute('srclang', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-img-srcset
 */
function srcset(string $value) : Attribute
{
    return new Attribute('srcset', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-ol-start
 */
function start(string $value) : Attribute
{
    return new Attribute('start', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-input-step
 */
function step(string $value) : Attribute
{
    return new Attribute('step', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-tabindex
 */
function tabindex(string $value) : Attribute
{
    return new Attribute('tabindex', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-hyperlink-target
 */
function target(string $value) : Attribute
{
    return new Attribute('target', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-title
 */
function title(string $value) : Attribute
{
    return new Attribute('title', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-source-type
 */
function type(string $value) : Attribute
{
    return new Attribute('type', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-object-typemustmatch
 */
function typemustmatch(string $value) : Attribute
{
    return new Attribute('typemustmatch', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-link-usecache
 */
function usecache(string $value) : Attribute
{
    return new Attribute('usecache', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-hyperlink-usemap
 */
function usemap(string $value) : Attribute
{
    return new Attribute('usemap', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-input-value
 */
function value(string $value) : Attribute
{
    return new Attribute('value', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-dim-width
 */
function width(string $value) : Attribute
{
    return new Attribute('width', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-link-workertype
 */
function workertype(string $value) : Attribute
{
    return new Attribute('workertype', $value);
}

/**
 * @link https://html.spec.whatwg.org/#attr-textarea-wrap
 */
function wrap(string $value) : Attribute
{
    return new Attribute('wrap', $value);
}
