Dada Framework
==============

Dada Framework is being developed as a comprehensive general-purpose
SCSS framework.


Philosophy
----------

The core of the framework is a flexible, semantic grid system that can be
used to quickly scaffold basic layouts. It's fully responsive (mobile-first)
and allows you to set specific column structures per responsive target
layout, and can be used in liquid (percentage-based container width)
form as well for building web apps.

We've tried to ensure that all basic HTML tags, typography elements and
components have a consistent, neutral style that can be easily extended.

The system is designed to be modular, meaning you can easily implement
optional add-ons by including extra dependencies in your `packages.json`
file.


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


Browser Support
---------------

Dada Framework is tested with Webkit (Safari, Chrome), Gecko (Firefox),
IE9–11, and mobile browsers (Android, Chrome Mobile, iOS Safari). All stable
releases are tested thoroughly—the non-stable releases are not.

### Vendor prefixes

The framework generates code that includes vendor prefixes, resulting in CSS
code that is not strictly standards-compliant. This is necessary, however, for
proper functioning of the framework.

We include vendor prefixes and browser hacks to a degree deemed reasonable to
support modern, widely used browsers.


License
-------

Dada Framework is released under the terms of the
[MIT license](http://opensource.org/licenses/MIT). See the included LICENSE
file for more information.
