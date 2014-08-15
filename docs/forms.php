<?php

// Dada Web Framework
// ---------------------------------------------------------------------
// Copyright (C) 2013-2014, Michiel Sikma <me@michielsikma.com>
// All Rights Reserved

include('./includes/functions.php');

$vars = array(
  'title' => 'Documentation (Forms and Components)',
  'description' => 'Main documentation showcasing the use of Dada Framework forms and interface components.',
);

ob_start('dadafw\docs');

?>
<p class="aural-only"><a href="#content">Jump to content</a></p>
<div id="root">
  
  <!-- Main header -->
  <div class="top-bar-bg">
    <div class="grid centered">
      <header class="row">
        <div class="col w-8">
          <p>Header content</p>
        </div>
        <div class="col w-4">
          <p>Login form</p>
        </div>
      </header>
    </div>
  </div>
  
  <!-- Main content -->
  <div class="grid centered">
    <article class="row">
      
      <!-- Sidebar navigation -->
      <aside class="col w-2">
        <ul class="sidebar-menu nav" id="docs_main_menu">
          <li><a href="#ch_overview">Forms and interface components</a>
            <ul>
              <li><a href="#ch_design_philosophy">Design philosophy</a></li>
              <li><a href="#ch_design_philosophy">The <code>border-box</code> formatting model</a></li>
              <li><a href="#ch_design_philosophy">Usage of HTML5 elements</a></li>
              <li><a href="#ch_design_philosophy">Basic <code>&lt;head&gt;</code> settings</a></li>
              <li><a href="#ch_design_philosophy">Mobile/responsiveness support</a></li>
            </ul>
          </li>
        </ul>
      </aside>
      
      <!-- Documentation content -->
      <section class="col w-10 manual-text">
        <!-- [6. Forms and interface components] -->
        <div class="page-header">
          <h1>Forms and interface components</h1>
          <p>Included in Dada Framework are numerous UI elements that aid in the creation of dynamic user interfaces. Some of these are JS-driven (where noted), but most are usable in non-JS environments too.</p>
        </div>
        <!-- [6.1 Forms] -->
        <h2>Forms</h2>
        <p>In order to build forms in Dada Framework, there are a couple of basic structures that need to be known—it's not entirely plug-and-play, but it's very simple. Here's a quick overview:</p>
        <ul>
          <li>Regular text input fields need <code>class="line"</code>.</li>
          <li>Field labels should be put inside of a <code>&lt;label class="line"&gt;</code>. Always use labels with an appropriate <code>id</code> attribute.</li>
          <li>We recommend wrapping a <code>&lt;label&gt;</code> and <code>&lt;input&gt;</code> group inside of a <code>&lt;p&gt;</code> or <code>&lt;div&gt;</code> element.</li>
          <li>You can use the <code>&lt;fieldset&gt;</code> element to group together related form elements.</li>
          <li>Buttons should be built using the <code>&lt;button&gt;</code> element, not <code>&lt;input type="button"&gt;</code>.</li>
          <li>Input fields are block elements by default, rather than inline-block.</li>
        </ul>
        <p>Here's a simple example. We've used the grid system to divide the form in two sections.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <form role="form" method="post" action="test.php" class="row">
              <div class="col w-6">
                <fieldset>
                  <p><label class="line" for="ex1">Username</label><input type="text" name="username" id="ex1" class="line"></p>
                  <p><label class="line" for="ex2">Password</label><input type="password" name="username" id="ex2" class="line"></p>
                  <p><label class="line" for="ex3">Screen name</label><input type="text" name="username" id="ex3" class="line"></p>
                  <p class="desc">Here's an explanation of this input field.</p>
                </fieldset>
                <fieldset>
                  <button class="btn primary" type="submit">Submit this form</button>
                </fieldset>
              </div>
              <div class="col w-6">
                <fieldset>
                  <p><label class="line">User options</label></p>
                  <p><label class="checkbox"><input type="checkbox" checked="checked"> Email me updates</label></p>
                  <p><label class="checkbox"><input type="checkbox"> Invisible mode</label></p>
                  <p><label class="radio"><input type="radio" name="ynm" checked="checked"> Yes</label><label class="radio"><input type="radio" name="ynm"> No</label><label class="radio"><input type="radio" name="ynm"> Maybe</label></p>
                </fieldset>
                <fieldset>
                  <p><label class="line">Interface options</label></p>
                  <p><label class="radio"><input type="radio" checked="checked" name="something"> Some interface option</label></p>
                  <p><label class="radio"><input type="radio" name="something"> Yet another interface option</label></p>
                </fieldset>
              </div>
            </form>
          </div>
          <pre class="code">&lt;form role="form" method="post" action="test.php" class="row"&gt;
  &lt;div class="col w-6"&gt;
      &lt;fieldset&gt;
          &lt;p&gt;&lt;label class="line" for="ex1"&gt;Username&lt;/label&gt;&lt;input type="text" name="username" id="ex1" class="line"&gt;&lt;/p&gt;
          &lt;p&gt;&lt;label class="line" for="ex2"&gt;Password&lt;/label&gt;&lt;input type="password" name="username" id="ex2" class="line"&gt;&lt;/p&gt;
          &lt;p&gt;&lt;label class="line" for="ex3"&gt;Screen name&lt;/label&gt;&lt;input type="text" name="username" id="ex3" class="line"&gt;&lt;/p&gt;
          &lt;p class="desc"&gt;Here's an explanation of this input field.&lt;/p&gt;
      &lt;/fieldset&gt;
      &lt;fieldset&gt;
          &lt;button class="btn primary" type="submit"&gt;Submit this form&lt;/button&gt;
      &lt;/fieldset&gt;
  &lt;/div&gt;
  &lt;div class="col w-6"&gt;
      &lt;fieldset&gt;
          &lt;p&gt;&lt;label class="line"&gt;User options&lt;/label&gt;&lt;/p&gt;
          &lt;p&gt;&lt;label class="checkbox"&gt;&lt;input type="checkbox" checked="checked"&gt; Email me updates&lt;/label&gt;&lt;/p&gt;
          &lt;p&gt;&lt;label class="checkbox"&gt;&lt;input type="checkbox"&gt; Invisible mode&lt;/label&gt;&lt;/p&gt;
          &lt;p&gt;&lt;label class="radio"&gt;&lt;input type="radio" name="ynm" checked="checked"&gt; Yes&lt;/label&gt;&lt;label class="radio"&gt;&lt;input type="radio" name="ynm"&gt; No&lt;/label&gt;&lt;label class="radio"&gt;&lt;input type="radio" name="ynm"&gt; Maybe&lt;/label&gt;&lt;/p&gt;
      &lt;/fieldset&gt;
      &lt;fieldset&gt;
          &lt;p&gt;&lt;label class="line"&gt;Interface options&lt;/label&gt;&lt;/p&gt;
          &lt;p&gt;&lt;label class="radio"&gt;&lt;input type="radio" checked="checked" name="something"&gt; Some interface option&lt;/label&gt;&lt;/p&gt;
          &lt;p&gt;&lt;label class="radio"&gt;&lt;input type="radio" name="something"&gt; Yet another interface option&lt;/label&gt;&lt;/p&gt;
      &lt;/fieldset&gt;
  &lt;/div&gt;
&lt;/form&gt;</pre>
        </div>
        <p>HTML5 has expanded the tools you have at your disposal for making an easily usable, semantic form. Any input field of type <code><mark>text</mark></code> can also be set to <code><mark>tel</mark></code>, <code><mark>email</mark></code> or <code><mark>url</mark></code>, allowing mobile agents to change their digital keyboard to match the input type, and letting browsers use the type indicator to give more relevant autocomplete entries (such as email addresses or phone numbers from the user's contacts list).</p>
        <!-- [6.1.1 Inline forms] -->
        <h3 id="inline_forms">Inline/horizontal forms</h3>
        <p>When there isn't much space, such as in a navbar, it's useful to be able to make a horizontal form field. This is done by adding the <code><mark>inline</mark></code> class to the <code>&lt;form&gt;</code> element.</p>
        <p>By default, buttons are slightly smaller than standard text input elements; <a href="#next_to_input_elements">adding the <code>inline</code> class</a> to the form equalizes them (this can also be done elsewhere by adding the <code>line</code> class to the <code>&lt;button&gt;</code> element).</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <form method="post" action="form.php" class="inline">
              <fieldset>
                <input type="text" class="line" placeholder="Username" />
                <input type="password" class="line" placeholder="Password" />
              	<button class="btn">Login</button>
              </fieldset>
            </form>
          </div>
          <pre class="code">&lt;form method="post" action="form.php" class="inline"&gt;
    &lt;fieldset&gt;
        &lt;input type="text" class="line" placeholder="Username" /&gt;
        &lt;input type="password" class="line" placeholder="Password" /&gt;
        &lt;button class="btn"&gt;Login&lt;/button&gt;
    &lt;/fieldset&gt;
&lt;/form&gt;</pre>
        </div>
        <!-- [6.1.2 Input add-ons] -->
        <h3>Input add-ons</h3>
        <p>It's possible to attach a label to an input field to make it more obvious what an input field is for.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <form role="form" method="post" action="test.php">
              <fieldset>
                <div>
                  <label class="line" for="ex4">Desired screen name</label>
                  <div class="input-group">
                    <span class="input-addon label">@</span>
                    <input type="text" name="username" id="ex4" class="line" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div>
                  <label class="line" for="ex5">Desired URL</label>
                  <div class="input-group">
                    <span class="input-addon label">http://site.com/user/</span>
                    <input type="text" name="url" id="ex5" class="line" />
                    <span class="input-addon label">/index.html</span>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <pre class="code">&lt;!-- One label on the left side --&gt;
&lt;div class="input-group"&gt;
  &lt;span class="input-addon label"&gt;@&lt;/span&gt;
  &lt;input type="text" name="username" class="line" /&gt;
&lt;/div&gt;

&lt;!-- Labels on both sides --&gt;
&lt;div class="input-group"&gt;
  &lt;span class="input-addon label"&gt;http://site.com/user/&lt;/span&gt;
  &lt;input type="text" name="url" class="line" /&gt;
  &lt;span class="input-addon label"&gt;/index.html&lt;/span&gt;
&lt;/div&gt;</pre>
        </div>
        <p>Add-ons aren't limited to just labels. It's possible to add a <code>&lt;button&gt;</code> element to the <code>.input-addon</code> container.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <form role="form" method="post" action="test.php">
              <fieldset>
                <div>
                  <label class="line" for="ex6">Desired screen name</label>
                  <div class="input-group">
                    <input type="text" name="username" id="ex6" class="line" />
                    <span class="input-addon">
                      <button class="btn">Check availability</button>
                    </span>
                  </div>
                </div>
                <div>
                  <label class="line" for="ex7">Desired screen name</label>
                  <div class="input-group">
                    <span class="input-addon">
                      <button class="btn">Check availability</button>
                    </span>
                    <input type="text" name="username" id="ex7" class="line" />
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <pre class="code">&lt;!-- On the right side --&gt;
&lt;div class="input-group"&gt;
  &lt;input type="text" name="username" class="line" /&gt;
  &lt;span class="input-addon"&gt;
      &lt;button class="btn"&gt;Check availability&lt;/button&gt;
  &lt;/span&gt;
&lt;/div&gt;

&lt;!-- On the left side --&gt;
&lt;div class="input-group"&gt;
  &lt;span class="input-addon"&gt;
      &lt;button class="btn"&gt;Check availability&lt;/button&gt;
  &lt;/span&gt;
  &lt;input type="text" name="username" class="line" /&gt;
&lt;/div&gt;</pre>
        </div>
        <aside class="box bordered warning icon">
          <p>Make sure to use a <code>&lt;div class="input-addon"&gt;</code> instead of a <code>&lt;span class="input-addon"&gt;</code> in case you're adding block elements to the add-on, such as a dropdown menu as described further below.</p>
        </aside>
        <!-- [6.1.3 Search input field] -->
        <h3>Search input field</h3>
        <p>In order to make a search input field, you need to either make an input field with <code><mark>type="search"</mark></code>, or add the <code>search</code> class to a regular <code>text</code> input field. To get the hourglass icon to show up, a <code>&lt;span class="search-icon"&gt;</code> needs to be added after the input.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <form role="form" method="post" action="test.php">
              <fieldset>
                <p><label class="line" for="ex8">Search</label><input type="text" name="search-term" id="ex8" class="line search" /><span class="search-icon"></span></p>
              </fieldset>
            </form>
          </div>
          <pre class="code">&lt;input type="search" name="search-term" class="line" /&gt;
&lt;span class="search-icon"&gt;&lt;/span&gt;</pre>
        </div>
        <!-- [6.1.4 Dropdown menus] -->
        <h3>Dropdown menus</h3>
        <p>Occasionally, you'll want to hide a number of options inside of a dropdown menu. It's possible to attach such a menu to a button by adding the <code><mark>has-dropdown</mark></code> class to the button, and then adding the menu itself right <em>after</em> the button.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <form role="form" method="post" action="test.php">
              <div>
                <button class="btn has-dropdown">File operations</button>
                <ul class="dropdown">
                  <li><a href="#">New</a></li>
                  <li><a href="#">Open</a></li>
                  <li><a href="#">Open Recent</a></li>
                  <li class="separator"></li>
                  <li><a href="#">Page Setup</a></li>
                  <li><a href="#">Print</a></li>
                  <li><a href="#">Print Selection</a></li>
                </ul>
              </div>
            </form>
          </div>
          <pre class="code">&lt;button class="btn has-dropdown"&gt;File operations&lt;/button&gt;
&lt;ul class="dropdown"&gt;
  &lt;li&gt;&lt;a href="#"&gt;New&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Open&hellip;&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Open Recent&hellip;&lt;/a&gt;&lt;/li&gt;
  &lt;li class="separator"&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Page Setup&hellip;&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Print&hellip;&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Print Selection&hellip;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;</pre>
        </div>
        <p>It's also possible to add dropdown menus to buttons inside of an input add-on. This can be used to set form values. Keep in mind, though, that this requires JS. <span class="fg-red-m2">(Fixme: fix this so that non-JS can manually input something)</span></p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <form role="form" method="post" action="test.php">
              <fieldset>
                <div>
                  <label for="ex9" class="line">Primary website address</label>
                  <div class="input-group">
                    <div class="input-addon">
                      <button class="btn has-dropdown" value="http">http://</button>
                      <ul class="dropdown">
                        <li><a href="#http">http://</a></li>
                        <li><a href="#https">https://</a></li>
                        <li><a href="#ftp">ftp://</a></li>
                      </ul>
                    </div>
                    <input type="text" class="line" id="ex9" name="url" />
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
          <pre class="code">&lt;div class="input-group"&gt;
  &lt;div class="input-addon"&gt;
      &lt;button class="btn has-dropdown" value="http"&gt;http://&lt;/button&gt;
      &lt;ul class="dropdown"&gt;
          &lt;li&gt;&lt;a href="#http"&gt;http://&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#https"&gt;https://&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#ftp"&gt;ftp://&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
  &lt;/div&gt;
  &lt;input type="text" class="line" name="url" /&gt;
&lt;/div&gt;</pre>
        </div>
        <!-- [6.1.5 Input field tags] -->
        <h3>Tag input field</h3>
        <p>One of the more complex form hacks is the ability to add tags inside of an input field. This is done by replacing the input field with a <code>&lt;div&gt;</code> containing the tags while the user types in a JS-controlled input field with an invisible background. To easily set one up in Dada Framework, you need to decorate an input field with the <code><mark>tag-input</mark></code></p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <form role="form" method="post" action="test.php">
              <fieldset>
                <p><label class="line" for="ex10">Tags</label><input type="text" id="ex10" class="line tag-input" /></p>
                <p class="desc">For example, type: these, are, tags x</p>
              </fieldset>
            </form>
          </div>
          <pre class="code">&lt;input type="text" id="picture_tags" class="line tag-input" /&gt;
&lt;script type="text/javascript"&gt;
DadaFW.decorate("#picture_tags");
&lt;/script&gt;</pre>
        </div>
        <p class="fg-red-m2">todo: use a data- attribute instead of a class attribute?</p>
        <!-- [6.2 Buttons] -->
        <h2>Buttons</h2>
        <p>Various types and sizes of buttons are included using the <code>&lt;button&gt;</code> element.</p>
        <p>There are five basic variations, as seen below, and four sizes: <code><mark>xs</mark></code> (extra small), <code><mark>s</mark></code> (small), <code><mark>m</mark></code> (medium; default), and <code><mark>l</mark></code> (large).</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <p>
              <button class="btn">Default Button</button>
              <button class="btn primary">Primary Button</button>
              <button class="btn overlay">Overlay Button</button>
              <button class="btn link">Link Button</button>
            </p>
            <p>
              <button class="btn success">Success Button</button>
              <button class="btn info">Info Button</button>
              <button class="btn warning">Warning Button</button>
              <button class="btn error">Error Button</button>
            </p>
            <p>
              <button class="btn primary l">Large button <code>(l)</code></button>
              <button class="btn primary m">Medium button <code>(m)</code></button>
              <button class="btn primary s">Small button <code>(s)</code></button>
              <button class="btn primary xs">Tiny button <code>(xs)</code></button>
            </p>
          </div>
          <pre class="code">&lt;p&gt;
  &lt;button class="btn"&gt;Default Button&lt;/button&gt;
  &lt;button class="btn primary"&gt;Primary Button&lt;/button&gt;
  &lt;button class="btn overlay"&gt;Overlay Button&lt;/button&gt;
  &lt;button class="btn link"&gt;Link Button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="btn success"&gt;Success Button&lt;/button&gt;
  &lt;button class="btn info"&gt;Info Button&lt;/button&gt;
  &lt;button class="btn warning"&gt;Warning Button&lt;/button&gt;
  &lt;button class="btn error"&gt;Error Button&lt;/button&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;button class="btn primary l"&gt;Large button &lt;code&gt;(l)&lt;/code&gt;&lt;/button&gt;
  &lt;button class="btn primary m"&gt;Medium button &lt;code&gt;(m)&lt;/code&gt;&lt;/button&gt;
  &lt;button class="btn primary s"&gt;Small button &lt;code&gt;(s)&lt;/code&gt;&lt;/button&gt;
  &lt;button class="btn primary xs"&gt;Tiny button &lt;code&gt;(xs)&lt;/code&gt;&lt;/button&gt;
&lt;/p&gt;</pre>
        </div>
        <!-- [6.2.1 Loading indicator] -->
        <h3>Loading indicator</h3>
        <p>Each button is capable of having a loading indicator, in case some processing occurs after clicking it.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <button class="btn primary can-load">Do Something</button>
            <button class="btn primary can-load is-loading">Doing Something</button>
          </div>
          <pre class="code">&lt;button class="btn primary can-load"&gt;Do Something&lt;/button&gt;
&lt;button class="btn primary can-load is-loading"&gt;Doing Something&lt;/button&gt;</pre>
        </div>
        <!-- [6.2.2 Button groups] -->
        <h3>Button groups</h3>
        <p>You can group multiple buttons together by putting them inside a <code>.btn-group</code> wrapper. Grouped buttons should have the same size for proper display.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <div class="btn-group">
              <button class="btn primary">Button 1</button>
              <button class="btn primary">Button 2</button>
              <button class="btn primary">Button 3</button>
            </div>
          </div>
          <pre class="code">&lt;div class="btn-group"&gt;
&lt;button class="btn primary"&gt;Button 1&lt;/button&gt;
&lt;button class="btn primary"&gt;Button 2&lt;/button&gt;
&lt;button class="btn primary"&gt;Button 3&lt;/button&gt;
&lt;/div&gt;</pre>
        </div>
        <!-- [6.2.3 Block buttons] -->
        <h3>Block buttons</h3>
        <p>To make a block-level button, add <code>block</code> to the class.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <button class="btn primary block">Button 1</button>
            <button class="btn primary block">Button 2</button>
          </div>
          <pre class="code">&lt;div class="btn-group"&gt;
&lt;button class="btn primary medium"&gt;asdf&lt;/button&gt;
&lt;button class="btn primary medium"&gt;asdf&lt;/button&gt;
&lt;/div&gt;</pre>
        </div>
        <p>All buttons made in Dada Framework are <code>inline-block</code> by default.</p>
        <!-- [6.2.4 Next to input elements] -->
        <h3 id="next_to_input_elements">Next to input elements</h3>
        <p>Occasionally, you'll want to have a button appear next to a standard text input element. The problem is, buttons are slightly smaller than text input elements, which makes the combination look weird. When using an <a href="#inline_forms">inline form</a>, the buttons are automatically equalized, but otherwise this can be done using the <code><mark>line</mark></code> class (as in: for use next to a <code>line</code> input field). This makes the button slightly bigger so they're the exact same size.</p>
        <!-- [4. Vector icons] -->
        <div class="page-header">
          <h1>Vector icons</h1>
          <p>Dada Framework includes Font Awesome, which provides numerous vector icons [blah blah]</p>
        </div>
        <p>When designing websites (and particularly web applications), it's often useful to be able to make your interface more obvious in usage by adding language-independent elements such as icons. To make it easy to be able to do this, we've included Font Awesome, which aims to be a complete vector icon set for web development purposes. Since the icons are vectors, they're fully scalable and Retina-ready. To demonstrate, here are some various ways you can include icons in a page.</p>
        <div class="box example with-label single">
          <p class="label">Example: various usages of vector icons</p>
          <div class="result">
            <p>This is running text, and <i class="fa fa-ambulance"></i> this is an ambulance at regular text size.</p>
            <p class="fg-green-m3"><i class="fa fa-check"></i> All is well, and there's nothing to worry about.</p>
            <button class="btn primary l"><i class="fa fa-refresh"></i> Refresh</button>
            <button class="btn l"><i class="fa fa-gears"></i> Options</button>
            <p>In a button group:</p>
            <div class="btn-group">
              <button class="btn"><i class="fa fa-align-left"></i></button>
              <button class="btn"><i class="fa fa-align-center"></i></button>
              <button class="btn"><i class="fa fa-align-right"></i></button>
              <button class="btn"><i class="fa fa-align-justify"></i></button>
            </div>
            <div class="btn-group">
              <button class="btn"><i class="fa fa-copy"></i> Clone</button>
              <button class="btn"><i class="fa fa-code-fork"></i> Fork</button>
              <button class="btn"><i class="fa fa-sitemap"></i> Compare</button>
            </div>
            <p>And in form add-ons:</p>
            <form>
              <div class="input-group"><span class="input-addon label"><i class="fa fa-key"></i></span><input type="text" class="line" /></div>
            </form>
          </div>
        </div>
        <p>For a full overview of Font Awesome's icons, see <a href="http://fortawesome.github.io/Font-Awesome/icons/">their website's icon overview page</a>.</p>
        <!-- [5. Color guide] -->
        <div class="page-header">
          <h1>Color guide</h1>
          <p>A number of standard colors are included in the framework for general use and for styling components.</p>
        </div>
        <p>The colors included are <em>gray, red, orange, yellow, green, aqua, cyan, bondi, blue, purple, magenta,</em> and <em>pink.</em> Each color has 12 shades of brightness, grouped in <em>light, medium,</em> and <em>dark</em>.</p>
        <p>To use one of the colors in plain HTML, you can use a class prefixed with <code>bg-</code> for setting a background color, or <code>fg-</code> for setting a text color, followed by the name of the color. For example, <code><mark>&lt;div class="bg-yellow-l4 fg-blue-d2"&gt;</mark></code> would create a div with the background color set to <code>yellow-l4</code> and the text color set to <code>blue-d2</code>.</p>
        <p>When working in SCSS, you can access colors through e.g. <code><mark>$color-pink-d1</mark></code> for <code>pink-d1</code>.</p>
        <div class="swatch-container">
          <div class="swatches"><div class="row"><div class="bg-white swatch col w-12">white</div></div><div class="row"><div class="bg-gray-l1 swatch col w-1">gray-l1</div><div class="bg-red-l1 swatch col w-1">red-l1</div><div class="bg-orange-l1 swatch col w-1">orange-l1</div><div class="bg-yellow-l1 swatch col w-1">yellow-l1</div><div class="bg-green-l1 swatch col w-1">green-l1</div><div class="bg-aqua-l1 swatch col w-1">aqua-l1</div><div class="bg-cyan-l1 swatch col w-1">cyan-l1</div><div class="bg-bondi-l1 swatch col w-1">bondi-l1</div><div class="bg-blue-l1 swatch col w-1">blue-l1</div><div class="bg-purple-l1 swatch col w-1">purple-l1</div><div class="bg-magenta-l1 swatch col w-1">magenta-l1</div><div class="bg-pink-l1 swatch col w-1">pink-l1</div></div><div class="row"><div class="bg-gray-l2 swatch col w-1">gray-l2</div><div class="bg-red-l2 swatch col w-1">red-l2</div><div class="bg-orange-l2 swatch col w-1">orange-l2</div><div class="bg-yellow-l2 swatch col w-1">yellow-l2</div><div class="bg-green-l2 swatch col w-1">green-l2</div><div class="bg-aqua-l2 swatch col w-1">aqua-l2</div><div class="bg-cyan-l2 swatch col w-1">cyan-l2</div><div class="bg-bondi-l2 swatch col w-1">bondi-l2</div><div class="bg-blue-l2 swatch col w-1">blue-l2</div><div class="bg-purple-l2 swatch col w-1">purple-l2</div><div class="bg-magenta-l2 swatch col w-1">magenta-l2</div><div class="bg-pink-l2 swatch col w-1">pink-l2</div></div><div class="row"><div class="bg-gray-l3 swatch col w-1">gray-l3</div><div class="bg-red-l3 swatch col w-1">red-l3</div><div class="bg-orange-l3 swatch col w-1">orange-l3</div><div class="bg-yellow-l3 swatch col w-1">yellow-l3</div><div class="bg-green-l3 swatch col w-1">green-l3</div><div class="bg-aqua-l3 swatch col w-1">aqua-l3</div><div class="bg-cyan-l3 swatch col w-1">cyan-l3</div><div class="bg-bondi-l3 swatch col w-1">bondi-l3</div><div class="bg-blue-l3 swatch col w-1">blue-l3</div><div class="bg-purple-l3 swatch col w-1">purple-l3</div><div class="bg-magenta-l3 swatch col w-1">magenta-l3</div><div class="bg-pink-l3 swatch col w-1">pink-l3</div></div><div class="row"><div class="bg-gray-l4 swatch col w-1">gray-l4</div><div class="bg-red-l4 swatch col w-1">red-l4</div><div class="bg-orange-l4 swatch col w-1">orange-l4</div><div class="bg-yellow-l4 swatch col w-1">yellow-l4</div><div class="bg-green-l4 swatch col w-1">green-l4</div><div class="bg-aqua-l4 swatch col w-1">aqua-l4</div><div class="bg-cyan-l4 swatch col w-1">cyan-l4</div><div class="bg-bondi-l4 swatch col w-1">bondi-l4</div><div class="bg-blue-l4 swatch col w-1">blue-l4</div><div class="bg-purple-l4 swatch col w-1">purple-l4</div><div class="bg-magenta-l4 swatch col w-1">magenta-l4</div><div class="bg-pink-l4 swatch col w-1">pink-l4</div></div><div class="row"><div class="bg-gray-m1 swatch col w-1">gray-m1</div><div class="bg-red-m1 swatch col w-1">red-m1</div><div class="bg-orange-m1 swatch col w-1">orange-m1</div><div class="bg-yellow-m1 swatch col w-1">yellow-m1</div><div class="bg-green-m1 swatch col w-1">green-m1</div><div class="bg-aqua-m1 swatch col w-1">aqua-m1</div><div class="bg-cyan-m1 swatch col w-1">cyan-m1</div><div class="bg-bondi-m1 swatch col w-1">bondi-m1</div><div class="bg-blue-m1 swatch col w-1">blue-m1</div><div class="bg-purple-m1 swatch col w-1">purple-m1</div><div class="bg-magenta-m1 swatch col w-1">magenta-m1</div><div class="bg-pink-m1 swatch col w-1">pink-m1</div></div><div class="row"><div class="bg-gray-m2 swatch col w-1">gray-m2</div><div class="bg-red-m2 swatch col w-1">red-m2</div><div class="bg-orange-m2 swatch col w-1">orange-m2</div><div class="bg-yellow-m2 swatch col w-1">yellow-m2</div><div class="bg-green-m2 swatch col w-1">green-m2</div><div class="bg-aqua-m2 swatch col w-1">aqua-m2</div><div class="bg-cyan-m2 swatch col w-1">cyan-m2</div><div class="bg-bondi-m2 swatch col w-1">bondi-m2</div><div class="bg-blue-m2 swatch col w-1">blue-m2</div><div class="bg-purple-m2 swatch col w-1">purple-m2</div><div class="bg-magenta-m2 swatch col w-1">magenta-m2</div><div class="bg-pink-m2 swatch col w-1">pink-m2</div></div><div class="row"><div class="bg-gray-m3 swatch col w-1">gray-m3</div><div class="bg-red-m3 swatch col w-1">red-m3</div><div class="bg-orange-m3 swatch col w-1">orange-m3</div><div class="bg-yellow-m3 swatch col w-1">yellow-m3</div><div class="bg-green-m3 swatch col w-1">green-m3</div><div class="bg-aqua-m3 swatch col w-1">aqua-m3</div><div class="bg-cyan-m3 swatch col w-1">cyan-m3</div><div class="bg-bondi-m3 swatch col w-1">bondi-m3</div><div class="bg-blue-m3 swatch col w-1">blue-m3</div><div class="bg-purple-m3 swatch col w-1">purple-m3</div><div class="bg-magenta-m3 swatch col w-1">magenta-m3</div><div class="bg-pink-m3 swatch col w-1">pink-m3</div></div><div class="row"><div class="bg-gray-m4 swatch col w-1">gray-m4</div><div class="bg-red-m4 swatch col w-1">red-m4</div><div class="bg-orange-m4 swatch col w-1">orange-m4</div><div class="bg-yellow-m4 swatch col w-1">yellow-m4</div><div class="bg-green-m4 swatch col w-1">green-m4</div><div class="bg-aqua-m4 swatch col w-1">aqua-m4</div><div class="bg-cyan-m4 swatch col w-1">cyan-m4</div><div class="bg-bondi-m4 swatch col w-1">bondi-m4</div><div class="bg-blue-m4 swatch col w-1">blue-m4</div><div class="bg-purple-m4 swatch col w-1">purple-m4</div><div class="bg-magenta-m4 swatch col w-1">magenta-m4</div><div class="bg-pink-m4 swatch col w-1">pink-m4</div></div><div class="row"><div class="bg-gray-d1 swatch col w-1">gray-d1</div><div class="bg-red-d1 swatch col w-1">red-d1</div><div class="bg-orange-d1 swatch col w-1">orange-d1</div><div class="bg-yellow-d1 swatch col w-1">yellow-d1</div><div class="bg-green-d1 swatch col w-1">green-d1</div><div class="bg-aqua-d1 swatch col w-1">aqua-d1</div><div class="bg-cyan-d1 swatch col w-1">cyan-d1</div><div class="bg-bondi-d1 swatch col w-1">bondi-d1</div><div class="bg-blue-d1 swatch col w-1">blue-d1</div><div class="bg-purple-d1 swatch col w-1">purple-d1</div><div class="bg-magenta-d1 swatch col w-1">magenta-d1</div><div class="bg-pink-d1 swatch col w-1">pink-d1</div></div><div class="row"><div class="bg-gray-d2 swatch col w-1">gray-d2</div><div class="bg-red-d2 swatch col w-1">red-d2</div><div class="bg-orange-d2 swatch col w-1">orange-d2</div><div class="bg-yellow-d2 swatch col w-1">yellow-d2</div><div class="bg-green-d2 swatch col w-1">green-d2</div><div class="bg-aqua-d2 swatch col w-1">aqua-d2</div><div class="bg-cyan-d2 swatch col w-1">cyan-d2</div><div class="bg-bondi-d2 swatch col w-1">bondi-d2</div><div class="bg-blue-d2 swatch col w-1">blue-d2</div><div class="bg-purple-d2 swatch col w-1">purple-d2</div><div class="bg-magenta-d2 swatch col w-1">magenta-d2</div><div class="bg-pink-d2 swatch col w-1">pink-d2</div></div><div class="row"><div class="bg-gray-d3 swatch col w-1">gray-d3</div><div class="bg-red-d3 swatch col w-1">red-d3</div><div class="bg-orange-d3 swatch col w-1">orange-d3</div><div class="bg-yellow-d3 swatch col w-1">yellow-d3</div><div class="bg-green-d3 swatch col w-1">green-d3</div><div class="bg-aqua-d3 swatch col w-1">aqua-d3</div><div class="bg-cyan-d3 swatch col w-1">cyan-d3</div><div class="bg-bondi-d3 swatch col w-1">bondi-d3</div><div class="bg-blue-d3 swatch col w-1">blue-d3</div><div class="bg-purple-d3 swatch col w-1">purple-d3</div><div class="bg-magenta-d3 swatch col w-1">magenta-d3</div><div class="bg-pink-d3 swatch col w-1">pink-d3</div></div><div class="row"><div class="bg-gray-d4 swatch col w-1">gray-d4</div><div class="bg-red-d4 swatch col w-1">red-d4</div><div class="bg-orange-d4 swatch col w-1">orange-d4</div><div class="bg-yellow-d4 swatch col w-1">yellow-d4</div><div class="bg-green-d4 swatch col w-1">green-d4</div><div class="bg-aqua-d4 swatch col w-1">aqua-d4</div><div class="bg-cyan-d4 swatch col w-1">cyan-d4</div><div class="bg-bondi-d4 swatch col w-1">bondi-d4</div><div class="bg-blue-d4 swatch col w-1">blue-d4</div><div class="bg-purple-d4 swatch col w-1">purple-d4</div><div class="bg-magenta-d4 swatch col w-1">magenta-d4</div><div class="bg-pink-d4 swatch col w-1">pink-d4</div></div><div class="row"><div class="bg-black swatch col w-12">black</div></div></div>
        </div>
        <p>Themes can set their own colors for internal use too, as they're just regular variables. Custom colors don't automatically get mapped to a premade CSS class, though—see <em>includes/colors.scss</em> for more information.</p>
        <!-- [7 Miscellaneous components] -->
        <div class="page-header">
          <h1>Miscellaneous Components</h1>
          <p>add description</p>
        </div>
        <!-- [7.1 Tags] -->
        <h2>Tags</h2>
        <p>We've included a simple class that allows you to show tags on your website. The tags are inline, meaning they can appear in a running text. By default, a tag has a gray background—to change this, override the <code><mark>background-color</mark></code> and <code><mark>color</mark></code> CSS values.</p>
        <p>To make it possible for users to remove a tag, add the <code>removable</code> class and then add a <code>&lt;span class="remove"&gt;&lt;/span&gt;</code> inside. Here's an example.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <p><span class="tag">Default Tag</span> <span class="tag removable">Removable Tag<span class="remove"></span></span></p>
          </div>
          <pre class="code">&lt;span class="tag"&gt;Default Tag&lt;/span&gt;<br /><br />&lt;span class="tag removable"&gt;<br/>    Removable Tag<br />    &lt;span class="remove"&gt;&lt;/span&gt;<br />&lt;/span&gt;</pre>
        </div>
        <p>Most of the time, tags will appear inside of their own separate container. If you want to use tags inside of a running text, add the <code>inline</code> class, which removes the margin on the bottom.</p>
        <div class="box example with-label single">
          <p class="label">Example</p>
          <div class="result">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed est risus, feugiat non diam et, facilisis tristique dolor. Etiam porttitor ipsum luctus ullamcorper faucibus. Vestibulum ante <span class="tag inline removable">ipsum primis<span class="remove"></span></span> in faucibus orci luctus et ultrices posuere cubilia Curae; <span class="tag inline">Etiam velit neque</span>, imperdiet et arcu eu, feugiat porttitor nunc. Donec vitae quam fringilla, sollicitudin risus eu, tincidunt est. Sed sodales malesuada semper. Integer nec turpis gravida, cursus sapien ut, pharetra orci. Nullam in nisl ullamcorper, dictum justo sit amet, pretium ante. </p>
          </div>
        </div>
        <p>You can use any combination of colors for your tags simply by adding the appropriate classes from the color guide.</p>
        <p><span class="tag bg-red-m2">Red tag</span> <span class="tag bg-orange-m2">Orange tag</span> <span class="tag bg-yellow-m2">Yellow tag</span> <span class="tag bg-green-m2">Green tag</span> <span class="tag bg-aqua-m2">Aqua tag</span> <span class="tag bg-cyan-m2">Cyan tag</span> <span class="tag bg-bondi-m2">Bondi tag</span> <span class="tag bg-blue-m2">Blue tag</span> <span class="tag bg-purple-m2">Purple tag</span> <span class="tag bg-magenta-m2">Magenta tag</span> <span class="tag bg-pink-m2">Pink tag</span><br /><span class="tag bg-red-l2 fg-red-d2">Red tag</span> <span class="tag bg-orange-l2 fg-orange-d2">Orange tag</span> <span class="tag bg-yellow-l2 fg-yellow-d2">Yellow tag</span> <span class="tag bg-green-l2 fg-green-d2">Green tag</span> <span class="tag bg-aqua-l2 fg-aqua-d2">Aqua tag</span> <span class="tag bg-cyan-l2 fg-cyan-d2">Cyan tag</span> <span class="tag bg-bondi-l2 fg-bondi-d2">Bondi tag</span> <span class="tag bg-blue-l2 fg-blue-d2">Blue tag</span> <span class="tag bg-purple-l2 fg-purple-d2">Purple tag</span> <span class="tag bg-magenta-l2 fg-magenta-d2">Magenta tag</span> <span class="tag bg-pink-l2 fg-pink-d2">Pink tag</span></p>
        <p>Or you can simply override using a <code>style</code> attribute.</p>
        <p><span class="tag removable" style="background:#7cc5ff;color:#3b11be;">Photoshop<span class="remove"></span></span> <span class="tag removable" style="background:#ffbb0b;color:#75420b;">Illustrator<span class="remove"></span></span> <span class="tag removable" style="background:#ff4cb6;color:#771142;">InDesign<span class="remove"></span></span></p>
        <p>If you want to add metadata to tags for programming purposes, such as a unique ID or a tag namespace, the best way to do that would be through HTML5 data attributes:</p>
        <pre><code>&lt;span class="tag" data-tag-slug="tag-name" data-tag-id="482" data-tag-ns="global"&gt;Tag name&lt;/span&gt;</code></pre>
        <p>All commonly used browsers support this approach.</p>
        <!-- [7.2 Breadcrumbs] -->
        <h2>Breadcrumbs</h2>
        <p>A simple breadcrumb navigation element shows the location of the current page within the hierarchy of the website. The links need to be enclosed within an <code>&lt;ol&gt;</code> element.</p>
        <p>To display an icon at the home link, add the <code>home</code> class to the <code>&lt;li&gt;</code> item.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <ol class="breadcrumbs">
              <li class="home"><a href="#">Home</a></li>
              <li><a href="#">Mathematics</a></li>
              <li>Number Theory</li>
            </ol>
          </div>
          <pre class="code">&lt;ol class="breadcrumbs"&gt;
  &lt;li class="home"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#"&gt;Mathematics&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;Number Theory&lt;/li&gt;
&lt;/ol&gt;</pre>
        </div>
        <!-- [7.3 Boxes] -->
        <h2>Boxes</h2>
        <p>Boxes can be used for a variety of purposes, such as a user comment, an aside that needs extra emphasis, a form, or a navigation list. Basically any type of data that can exist inside its own square.</p>
        <p>The most basic box just adds a border, but we've specifically added styling support for data that has a header and/or footer.</p>
        <p>The best way to explain the concept is simply to give a run down of the various styles we've included.</p>
        <div class="row">
          <div class="col w-6">
            <div class="box bordered">
              <pre class="inline"><code>&lt;div class="box bordered"&gt;
  content</code></pre>
            </div>
            <div class="box bordered">
              <div class="inner">
                <pre class="inline"><code>&lt;div class="box bordered"&gt;
  &lt;div class="inner"&gt;
      content</code></pre>
              </div>
            </div>
            <div class="box bg">
              <pre class="inline"><code>&lt;div class="box bg"&gt;
  content</code></pre>
            </div>
          </div>
          <div class="col w-6">
            <div class="box bg">
              <div class="inner">
                <pre class="inline"><code>&lt;div class="box bg"&gt;
  &lt;div class="inner"&gt;
      content</code></pre>
              </div>
            </div>
            <div class="box bg bg-yellow-l4">
              <div class="inner">
                <pre class="inline"><code>&lt;div class="box bg bg-yellow-l4"&gt;
  &lt;div class="inner"&gt;
      content</code></pre>
              </div>
            </div>
            <div class="box bg bg-yellow-l4">
              <div class="head">Header</div>
              <div class="inner">
                <pre class="inline"><code>&lt;div class="box bg bg-yellow-l4"&gt;
  &lt;div class="inner"&gt;
      content</code></pre>
              </div>
            </div>
          </div>
        </div>
        <p>There are also semantic boxes for relaying feedback to your users. We use them here in the documentation as well. An icon can be included by adding the <code>icon</code> class to the box. We recommend using an <code>&lt;aside&gt;</code> element for this content.</p>
        <aside class="box bordered info icon">
          <p>Example standard information aside.</p>
        </aside>
        <aside class="box bordered warning icon">
          <p>Warning class.</p>
        </aside>
        <aside class="box bordered error icon">
          <p>Something went seriously wrong...</p>
        </aside>
        <!-- [7.4 Landing page] -->
        <h2>Landing page</h2>
        <p>Make a nice first impression on your users by opening your website with a full-page image spread, sized to fill up the full screen height regardless of the viewport size. The image will be sized to cover the entire area.</p>
      </section>
    </article>
    <footer class="row">
      <div class="col w-12">
        <p>footer</p>
      </div>
    </footer>
  </div>
</div>