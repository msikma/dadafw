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

There's some information on [our Github wiki](https://github.com/msikma/dadafw/wiki)
on how to get started if you want to contribute code.

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
