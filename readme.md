Dada Framework
==============

Dada Framework is a comprehensive general-purpose SCSS framework.
It's currently under heavy development and not production-ready,
but it's getting there.

* [Github project page](https://github.com/msikma/dadafw)

* [npm package page](https://www.npmjs.com/package/dadafw)


See also the following projects:

* ReactJS version: [dadafw-reactjs](https://github.com/msikma/dadafw-reactjs)

* AngularJS version: [dadafw-angular](https://github.com/pascal-privax/dadafw-angular)


Philosophy
----------

The core of the framework is a Flexbox-based grid system that can be
used to quickly scaffold basic layouts. It's fully responsive (mobile-first)
and allows you to set specific column structures per responsive target
layout, and can be used in liquid (percentage-based container width)
form as well for building web apps.

We've tried to ensure that all basic HTML tags, typography elements and
components have a consistent, neutral style that can be easily extended.

This project only contains SCSS, and is intended as a base platform for other
projects to build upon, such as the [ReactJS](https://github.com/msikma/dadafw-reactjs)
behavior layer.


Development
-----------

Currently, the framework is still under heavy development. It's already
possible to start using it, but a lot of planned features have not been
developed yet, and there's not much documentation. This is going to change,
so follow the project or request some features if you're interested
in watching things unfold.

There's some information on [our Github wiki](https://github.com/msikma/dadafw/wiki)
on how to get started if you want to contribute code.

If you just want to add a quick note, or give some general feedback,
feel free to [open an issue](https://github.com/msikma/dadafw/issues). All
feedback is greatly appreciated.


Installation
------------

Use `npm` to install the framework as a project dependency:

    npm install --save dadafw

(You may not need the `--save` argument if you don't have a `package.json`
file.)


### Usage with ReactJS

The [dadafw-reactjs](https://github.com/msikma/dadafw-reactjs) project is a
layer of behavior code built around the SCSS code using React. It's the
recommended way to get started when building a ReactJS website or application.


### Usage with AngularJS

See the [dadafw-angular](https://github.com/pascal-privax/dadafw-angular)
project by Pascal Scheepers.


Contributing
------------

Contributions are greatly appreciated. To start a watch task that recompiles
the framework upon making changes to the core library, use `grunt dev:dadafw`.

Upon typing the `grunt` command itself, a customized help message with the
various supported build options will be displayed.

All code should be [Libsass](https://github.com/sass/libsass)-compatible.


Browser Support
---------------

Dada Framework is tested with Webkit (Safari, Chrome), Gecko (Firefox),
IE9–11, and mobile browsers (Android, Chrome Mobile, iOS Safari). All stable
releases are tested—the non-stable releases are not.

### Vendor prefixes

The framework generates code that includes vendor prefixes, resulting in CSS
code that is not strictly standards-compliant. This is necessary, however, for
cross-browser compatibility. We use [Bourbon](http://bourbon.io/)'s mixin
library for this purpose.


Vector Icons
------------

We use [Font Awesome](http://fortawesome.github.io/Font-Awesome/) to add vector
icons to the project.

(This is set to be sectioned off into a separate npm package in the future.)


License
-------

Dada Framework is released under the terms of the
[MIT license](http://opensource.org/licenses/MIT). See the included license
file for more information.
