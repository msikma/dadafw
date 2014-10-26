Dada Framework
==============

Dada Framework is being developed as a comprehensive general-purpose
SCSS framework that integrates with AngularJS.

Philosophy
----------

We started developing Dada Framework as a system to fully integrate with
AngularJS and leverage its unique capabilities.

The core of the framework is a flexible, semantic grid system that can be
used to quickly scaffold basic layouts. It's fully responsive (mobile-first)
and allows you to set specific column structures per responsive target
layout, and can be used in liquid (percentage-based container width)
form as well for building web apps.

We've tried to ensure that all basic HTML tags, typography elements and
components have a consistent, neutral style that can be easily extended.
Helvetica is used as the main font, complemented by Helvetica Neue for
interface elements due to its more consistent baseline.

Development
-----------

Currently, the framework is still under heavy development. It's already
possible to start using it, but a lot of planned features have not been
developed yet, and there's not much documentation. This is going to change,
so follow the project or request some features if you're interested
in watching things unfold.

Code Style
----------

In order to keep our framework neat and tidy, we've set up a number of
style rules. If you send in a pull request, we might ask you to make some
modifications to ensure that your code is consistent with ours.

### SCSS

* Use only spaces, and indent 2 spaces at a time.
* Keep lines within 80 characters.
* Use dashes for variable names. Don't use capitals or underscores.
* Use apostrophes ('), not quotation marks (").
* A block of CSS rules should be followed by a newline before further nesting.
* Don't indent attributes, except when they're vendor-prefixed.
* You may put multiple selectors on the same line if they're not too big
  and have the same specificity. Otherwise, selectors should go on separate
  lines.
* Font weights should be indicated by a number (300 for light, 400 for
regular, 700 for bold).
* Inline comments on the same line as the markup code are fine, as long
  as they're extremely brief—otherwise they should be on separate lines.
* Block comments should not be used except for SassDoc blocks.
* Don't use triple slash SassDoc blocks (///).
* Use a space after the colon following an attribute name.

Example:
```css
/**
 * Applies the box-sizing attribute with cross-browser compatibility.
 *
 * @link http://www.paulirish.com/2012/box-sizing-border-box-ftw/
 * @param {string} $value (border-box) - border-box attribute value
 */
@mixin box-sizing($value:border-box) {
  @if $ddfw-compatibility-mode {
       -moz-box-sizing: $value; // Firefox current
    -webkit-box-sizing: $value; // iOS <= 4, Android <= 2.3
  }
  box-sizing: $value;
}

code, samp,
.my-element#id,
.another-element#id {
  @include box-sizing;

  // Use our monospace font for code-related elements.
  font-family: $font-mono;
  font-weight: 300;
  border: 2px solid red;
  border-top: none;

  &:before, &:after {
	content: 'hello world';
  }
}
```

Vendor-prefixed attributes should always be built using a cross-browser
compatible mixin in the includes/xbrowser.scss file. Vendor prefixes
should never appear in the main code.

### Javascript

We generally follow the [Google Javascript Style Guide](https://google-styleguide.googlecode.com/svn/trunk/javascriptguide.xml).
This means the following:

* Use only spaces, and indent 2 spaces at a time.
* Keep lines within 80 characters.
* Use camelCase for function and variable names, CapitalCase for class names,
  and ALL_CAPS_WITH_UNDERSCORES for constants.
* Use apostrophes ('), not quotation marks (").

We have one major exception to Google's style guide:

* Use [Stroustrup style](http://en.wikipedia.org/wiki/Indent_style#Variant:_Stroustrup)
  with regard to braces.

Also, all code should start with 'use strict' magic, which should always
be placed in a context of its own, not at the top of a file.
  
Example:
```javascript
// to be written someday
```

The Google style guide covers many more scenarios, so it's good to give
it a read when working on the JS part of the framework.

Compiling
---------

**Note: these instructions are for developing the framework itself. We'll
add instructions for setting up the framework for a separate project later.**

All the dependencies needed to begin using the framework can be automatically
downloaded and installed through npm:

    npm install

After that, you can use the Gruntfile to get to work. Normally, you'd want
to develop using the `grunt watch` task, which watches for changes and then
automatically recompiles the SCSS.

**Note: instructions on how to develop the JS are coming later.**

Browser Support
---------------

Dada Framework is tested with Webkit (Safari, Chrome), Gecko (Firefox),
IE9–11, and mobile browsers (Android, Chrome Mobile, iOS Safari). All stable
releases are tested thoroughly—the non-stable releases are not.

### CSS3 Standards-Compliance

By default, the framework generates code that includes vendor prefixes,
resulting in CSS code that is not standards-compliant. This is necessary,
however, for proper functioning of the framework. It's possible to remove all
vendor-prefixed code by setting the `$ddfw-compatibility-mode` variable to
`false` in the settings file, but that breaks the framework.

We include vendor prefixes and browser hacks to a degree deemed reasonable to
support modern, widely used browsers.

License
-------

Dada Framework is released under the terms of the
[MIT license](http://opensource.org/licenses/MIT). See the included LICENSE
file for more information.
