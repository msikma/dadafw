Dada Framework
==============

Dada Framework is being developed as a comprehensive and complete
HTML5-capable SCSS/JS framework for all types of websites.

Philosophy
----------

(More and better text comin' later.)

The core of the framework is a flexible, semantic grid system that can be
used to quickly scaffold basic layouts. It's fully responsive (mobile-first)
and allows you to set specific column structures per responsive target
layout, and can be used in liquid (percentage-based container width)
form as well for building web apps.

We've tried to ensure that all basic HTML tags, typography elements and
components have a consistent style. Helvetica is used as the main font,
complemented by Helvetica Neue for interface elements due to its more
consistent baseline.

Development
-----------

*Currently, the framework is still under heavy development. It's already
possible to start using it, but a lot of planned features have not been
developed yet, and there's not much documentation. This is going to change,
so follow the project or request some features if you're interested
in watching things unfold.*

Code Style
----------

The framework's SCSS is built using tabs set to an indent size of 2.
Use a space after the colon following an attribute, don't table
attributes too often (for vendor-prefixed attributes, it's OK), and put
multiple selectors on the same line if they're not too big and have the
same specificity. A block of CSS rules should be followed by a newline
before further nesting occurs.

Font weights should be indicated by a number (300 for light, 400 for
regular, 700 for bold). Apostrophes are preferred over quotes.

Inline comments on the same line as the markup code are fine, as long
as they're extremely brief—otherwise they should be on separate lines.
Block comments should not be used except for the main copyright notice.
Keep comments (and code, where possible) within 76 characters.

Example:

	@mixin box-sizing-example {
		 -moz-box-sizing: border-box; // Firefox current
	  -webkit-box-sizing: border-box; // iOS <= 4, Android <= 2.3
			  box-sizing: border-box; // Everything else
	}

	code, samp,
	.my-element#id,
	.another-element#id {
	  @include box-sizing-example;
  
	  // Use our monospace font for code-related elements.
	  font-family: $font-mono;
	  font-weight: 300;
	  border: 2px solid red;
	  border-top: none;
  
	  &:before, &:after {
		content: 'hello world';
	  }
	}

On another note, vendor-prefixed attributes should always be built using a
cross-browser compatible mixin in the includes/xbrowser.scss file. Vendor
prefixes should never appear in the main code.

Compiling
---------

In order to compile the framework, a Sass compiler is needed. Follow the
instructions on [sass-lang.com](http://sass-lang.com/)‎ in order to
install one.

To compile to a single CSS file named 'output.css', use the following:

	sass --style compressed dada-web-framework/css/dada.scss:build/output.css

Developers might want to tell Sass to watch for changes and recompile
as needed:

	sass --watch dada-web-framework/css/dada.scss:build/output.css

Only the `dada.scss` file needs to be compiled.

To my knowledge, the source code currently does not compile using SassC
due to the fact it doesn't support maps.

CSS3 Standards-Compliance
-------------------------

By default, Dada Framework generates code that includes vendor prefixes,
resulting in CSS code that is not entirely standards-compliant. This is
necessary, however, for proper functioning of the framework.
If standards-compliance is an issue, you can set the
`$ddfw-compatibility-mode` variable to `false`. If it's set to false, the
compiled CSS will be standards-compliant, but with browser compatibility
being what it is as of 2014, the framework will likely crash and burn.

Also, in that case, the Font Awesome project needs to be removed
from the externals.scss include file, as it isn't CSS3-compatible
and cannot be selectively imported based on this variable.

Browser compatibility through the use of vendor prefixes is done only
to a reasonable degree, so not all prefixes are used.

License
-------

Dada Framework is released under the terms of the
[MIT license](http://opensource.org/licenses/MIT).
