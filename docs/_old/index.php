<?php

// Dada Web Framework
// ---------------------------------------------------------------------
// Copyright (C) 2013-2014, Michiel Sikma <info@michielsikma.com>
// All Rights Reserved

include('./includes/functions.php');

$vars = array(
  'title' => 'Documentation (Overview and Typography)',
  'description' => 'Main documentation showcasing the grid system, basic scaffolding and typography capabilities.',
);

ob_start('dadafw\docs');

?>
<p class="aural-only"><a href="#content">Jump to content</a></p>
<div id="root">
  
  <!-- Main header -->
  <div class="header fixed">
    <div class="header-section inverted">
      <section class="navbar">
        <div class="grid">
          <header class="row">
            <div class="col w-9">
              <ul class="nav navbar-menu">
                <li class="">
                  <a href="#" class="logo"><img src="%base_url%static/logo.png" class="logo" /></a>
                </li>
                <li class="divider"></li>
                <li><a href="#" class="item"><i class="fa fa-home"></i> Home</a></li>
                <li class="divider"></li>
                <li class="dropdown active">
                  <a class="item dropdown-toggle" href="#"><i class="fa fa-book"></i> Learn</a>
                  <ul class="dropdown-menu" style="display:none">
                    <li class="current"><a href="#">Reference guide</a></li>
                    <li><a href="#">Example layouts</a></li>
                    <li><a href="#">Showcase</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </li>
                <li class="divider"></li>
                <li class="dropdown">
                  <a class="item dropdown-toggle" href="#"><i class="fa fa-code"></i> Development</a>
                  <ul class="dropdown-menu" style="display:none">
                    <li><a href="#">Github page</a></li>
                    <li><a href="#">Etc</a></li>
                    <li><a href="#">Etc</a></li>
                    <li><a href="#">Etc</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="col w-3">
              <form>
                <input type="search" name="search-term" class="line" />
                <span class="search-icon"></span>
              </form>
            </div>
          </header>
        </div>
      </section>
    </div>
    <div class="header-section small">
      <div class="grid">
        <div class="row">
          <div class="col w-2"><p>Text goes here</p></div>
          <div class="col w-10"><p>Some text here too</p></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main content -->
  <div class="grid main-content">
    <article class="row">
      
      <!-- Sidebar navigation -->
      <aside class="col w-2">
        <p>This is where the menu will go. This is all temporary content. The decorators are set to be rewritten for easy use with Angular. Font Awesome is set to be replaced with a better vector font.</p>
        <ul class="sidebar-menu nav" id="docs_main_menu" style="display:none;">
          <li><a href="#ch_overview">Overview</a>
            <ul>
              <li><a href="#ch_design_philosophy">Design philosophy</a></li>
              <li><a href="#ch_design_philosophy">The <code>border-box</code> formatting model</a></li>
              <li><a href="#ch_design_philosophy">Usage of HTML5 elements</a></li>
              <li><a href="#ch_design_philosophy">Basic <code>&lt;head&gt;</code> settings</a></li>
              <li><a href="#ch_design_philosophy">Mobile/responsiveness support</a></li>
            </ul>
          </li>
          <li><a href="#ch_overview">Grid System</a>
            <ul>
              <li><a href="#">Basic grid scaffolding</a></li>
              <li><a href="#">Semantic elements</a></li>
            </ul>
          </li>
          <li><a href="#ch_overview">Typography</a>
            <ul>
              <li><a href="#">Headings</a></li>
              <li><a href="#">Programming code</a></li>
              <li><a href="#">Lists</a></li>
              <li><a href="#">Quotations</a></li>
              <li><a href="#">Text-level usage summary</a></li>
              <li><a href="#">Color guide</a></li>
            </ul>
          </li>
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
        <!-- [1. Overview] -->
        <div class="page-header">
          <h1 id="ch_overview">Overview</h1>
          <p>Here's a brief overview of the things you can do with Dada. All of these are written from what we consider a best-practices perspective—we'll try to explain along the way why we made certain design choices and how you can improve on your development practices.</p>
        </div>
        <!-- [1.1 Design philosophy] -->
        <h2 id="ch_design_philosophy">Design philosophy</h2>
        <p>Dada Framework is being developed as a comprehensive and complete HTML5-capable CSS framework for all types of websites. It's specifically designed to benefit websites with a lot of semantic information and has responsiveness built in.</p>
        <p>The core of the framework is a 12-column grid system that can be used to quickly scaffold basic layouts. It's fully responsive and allows you to set specific column structures per responsive target layout, and can be used in liquid (percentage-based container width) form as well for building web apps.</p>
        <p>We've tried to ensure that all basic HTML tags, typography elements and components have a consistent style. Helvetica is used as the main font, with Helvetica Neue for interface elements due to its more consistent baseline.</p>
        <!-- [1.2 The border-box formatting model] -->
        <h2>The <code>border-box</code> formatting model</h2>
        <p>One of the basic things the framework does is set the <code>box-sizing: border-box</code> CSS to the entire document. The <code>border-box</code> formatting model changes the basic width and height calculations of HTML elements such that the <code>width</code> and <code>height</code> values determine their size, and additional padding and borders exist inside of those value rather than outside. This makes it significantly easier to quickly develop layouts and cuts down on the amount of required markup.</p>
        <p>Since the framework's grid system is built using this model as well, it's easily possible to make quick modifications to the grid or the gutter without requiring a recompilation of the framework or additional markup.</p>
        <!-- [1.3 Usage of HTML5 elements] -->
        <h2>Usage of HTML5 elements</h2>
        <p>We recommend the use of an HTML5 doctype with a <code>lang</code> attribute. All modern browsers support HTML5, although not all of its features are necessarily supported yet. All things considered, however, there's no reason not to use the HTML5 doctype anymore.</p>
        <pre><span class="cp">&lt;!doctype html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"en"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/html&gt;</span></pre>
        <p>However, if you're supporting a legacy website or application, you can still use the older HTML4 or XHTML doctypes—the framework is agnostic to it. All of the framework's examples are written using XHTML syntax, so they can safely be copypasted into either flavor of markup.</p>
        <p>If you're using a language that reads from right to left, such as Arabic, you'll need to include <code>dir="rtl"</code> to the HTML tag.</p>
        <!-- [1.4 Basic <head> settings] -->
        <h2>Basic <code>&lt;head&gt;</code> settings</h2>
        <p>At the very least, you should include the following elements in your <code>&lt;head&gt;</code> element:</p>
        <pre><span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
<span class="nt">&lt;title&gt;</span> ... <span class="nt">&lt;/title&gt;</span></pre>
        <p>add some more text here</p>
        <!-- [1.5 Browser support] -->
        <h2>Browser support</h2>
        <p>Dada Framework is fully supported out of the box by all major browsers, except IE8—despite Microsoft's claims to the contrary, the world's most popular browser still garbage. Thankfully, you can easily fix most problems by adding <a href="https://github.com/aFarkas/html5shiv">html5shiv</a> and <a href="https://github.com/scottjehl/Respond">Respond.js</a> to your header code.</p>
        <pre>&lt;!-- Enable responsiveness for IE8 and below --&gt;
&lt;!--[if lt IE 9]&gt;
  &lt;script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"&gt;&lt;/script&gt;
  &lt;script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"&gt;&lt;/script&gt;
&lt;![endif]--&gt;</pre>
        <p>These tags should be added after any <code>&lt;style&gt;</code> tags. Despite this addition, IE8 will still have no CSS3 effects such as box shadows and rounded corners.</p>
        <!-- [1.6 Mobile/responsiveness support] -->
        <h2>Mobile/responsiveness support</h2>
        <p>We support responsiveness by default. There are four stages of responsiveness, with the smallest being specially designed for mobile phone screen sizes. You can make sections appear for specific sizes only and modify specific column widths where desired. Generally, though, even if you scaffold your grid only for the default or largest size, it should work decently enough on smaller devices.</p>
        <p>For properly enabling touch zooming on mobile devices, the following element should be added.</p>
        <pre><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, user-scalable=yes, initial-scale=1"</span> <span class="nt">/&gt;</span></pre>
        <p>If you're developing a web-based application or site that should not zoom at all, you can disable it entirely.</p>
        <pre><span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="na">content=</span><span class="s">"width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1"</span> <span class="nt">/&gt;</span></pre>
        <!-- [2. Grid system] -->
        <div class="page-header">
          <h1>Grid system</h1>
          <p>Dada contains a fluid 12-column grid system, designed for four responsive sizes, that works in accordance with the <code>border-box</code> formatting model. It's fully customisable, even through the use of simple CSS, and collapses to full rows for small mobile viewports. The grid can be easily set up, with custom modifications for each responsive size, entirely through the use of predefined class names.</p>
        </div>
        <!-- [2.1 Basic grid scaffolding] -->
        <h2>Basic grid scaffolding</h2>
        <p>To set up a basic grid, the following code can be used:</p>
        <div class="box example with-label single">
          <p class="label">Example</p>
        <pre class="code"><code>&lt;div class="grid"&gt;
  &lt;div class="row"&gt;
      &lt;div class="col w-6"&gt;Column of width 6&lt;/div&gt;
      &lt;div class="col w-6"&gt;Column of width 6&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
        <p>To fill one row, the column width needs to add up to 12. Columns are interspersed by gaps of 30px (15px on either side), and the entire grid itself has a gutter on both sides as well.</p>
        <div class="grid-debug">
          <div class="row">
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
            <div class="col w-1">1</div>
          </div>
          <div class="row">
            <div class="col w-2">2</div>
            <div class="col w-2">2</div>
            <div class="col w-2">2</div>
            <div class="col w-2">2</div>
            <div class="col w-2">2</div>
            <div class="col w-2">2</div>
          </div>
          <div class="row">
            <div class="col w-4">4</div>
            <div class="col w-4">4</div>
            <div class="col w-4">4</div>
          </div>
          <div class="row">
            <div class="col w-6">6</div>
            <div class="col w-6">6</div>
          </div>
          <div class="row">
            <div class="col w-12">12</div>
          </div>
        </div>
        <p>The <code>grid</code> class should only be used once; nesting the grid can be done simply by adding another <code>row</code> div inside of a column, which can then be filled up with yet another 12 columns.</p>
        <div class="grid-debug">
          <div class="row">
            <div class="col w-6">
              <div class="row">
                <div class="col w-6">6 (nested)</div>
                <div class="col w-6">6 (nested)</div>
              </div>
            </div>
            <div class="col w-6 docs-bigger-col">6</div>
          </div>
        </div>
        <p>We've added some extra padding so you can see the grid more clearly. In practice, nested columns don't have any extra padding.</p>
        <!-- [2.2 Text columns] -->
        <h2>Text columns</h2>
        <p>Aside from the standard grid, it's also possible to span the contents of a container (such as a long running text) across multiple columns. This is done using the CSS <code>column-count</code> attribute. This allows you to put text from a single container in multiple columns.</p>
        <p>The columns can be set using CSS classes <code>colspan-1</code> through <code>colspan-12</code> on the column element.</p>
        <div class="grid-debug">
          <div class="row">
            <div class="col w-6">
              <p>Standard column (6)</p>
            </div>
            <div class="col w-6">
              <p>Standard column (6)</p>
            </div>
          </div>
          <div class="row">
            <div class="col w-12 colspan-2">
              <p>Standard column (12) with <code>colspan-2</code></p>
              <div class="align-left">
                <p>Praesent malesuada arcu sapien, a malesuada purus tempus nec. Donec dictum suscipit urna id semper. Nullam non accumsan libero. Morbi lacus nisi, convallis in egestas non, lacinia non odio. Praesent imperdiet lacus sit amet turpis adipiscing pulvinar. Quisque fermentum dolor eros, ac semper arcu sodales nec. Aliquam sed metus aliquam, sodales sem in, gravida sem. Praesent id arcu eu quam mollis luctus ac eu risus. Sed ac velit sed nisl posuere sollicitudin. Ut luctus ut quam eget convallis. Cras feugiat placerat tellus id ultrices. Aenean scelerisque vulputate neque, id luctus lorem mattis in.</p>
              </div>
            </div>
          </div>
        </div>
        <p>Note that this <em>isn't supported</em> in Internet Explorer 9 and below.</p>
        <!-- [2.3 Semantic elements] -->
        <h2>Semantic elements</h2>
        <p>Usage of semantic HTML5 elements is recommended, but optional. The grid system is agnostic to which element is used for scaffolding. A quick overview of the basic layouting elements:</p>
        <dl>
          <dt><code>&lt;header&gt;</code></dt>
          <dd>For headers for both the main layout and in smaller page elements (such as the header sections of multiple blog posts on one page)</dd>
          <dt><code>&lt;nav&gt;</code></dt>
          <dd>For navigation lists</dd>
          <dt><code>&lt;article&gt;</code></dt>
          <dd>For wrapping the main page content (after the header and before the footer), containing both the <code>&lt;section&gt;</code> and <code>&lt;aside&gt;</code> elements, and for smaller page elements such as an individual blog post or a single tweet</dd>
          <dt><code>&lt;section&gt;</code></dt>
          <dd>For sectioning off specific parts of a page or an article</dd>
          <dt><code>&lt;aside&gt;</code></dt>
          <dd>For either a layout sidebar, or a sidebar in an article—text that is relevant but doesn't fit within the regular flow of the article's text</dd>
          <dt><code>&lt;footer&gt;</code></dt>
          <dd>For footers for both the main layout and in smaller page elements (such as the post time and author information at the bottom of a single blog post)</dd>
        </dl>
        <p>A sample layout is shown below.</p>
        <div class="box example with-label single fixed-height">
          <p class="label">Example</p>
          <pre class="code"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"grid"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;header</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col w-8"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>Header content<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col w-4"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>Login form<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/header&gt;</span>
  <span class="nt">&lt;nav</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col w-12"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>Navigation lists<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/nav&gt;</span>
  <span class="nt">&lt;article</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"col w-8"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>Main page content<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/section&gt;</span>
      <span class="nt">&lt;aside</span> <span class="na">class=</span><span class="s">"col w-4"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>Aside content<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/aside&gt;</span>
  <span class="nt">&lt;/article&gt;</span>
  <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"col w-12"</span><span class="nt">&gt;</span>
          <span class="nt">&lt;p&gt;</span>Footer content<span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/footer&gt;</span>
<span class="nt">&lt;/div&gt;</span></pre>
        </div>
        <p>All of the elements mentioned above can simply be replaced by <code>&lt;div&gt;</code> elements in case you're targeting HTML4 or XHTML.</p>
        <!-- [3. Typography] -->
        <div class="page-header">
          <h1>Typography</h1>
          <p>All visible typography elements in HTML are styled in a consistent manner.</p>
        </div>
        <!-- [3.1 Headings] -->
        <h2>Headings</h2>
        <p>The sizes of the headings range from the very large <code>&lt;h1&gt;</code> to the small <code>&lt;h6&gt;</code> which has the same size as regular text. Heading 1 has a slightly lighter weight than regular text, and 4 through 6 are bolded.</p>
        <div class="box example with-label single">
          <p class="label">Example</p>
          <div class="result">
            <h1 data-ddfw="non-semantic">Heading 1</h1>
            <p>Paragraph start.</p>
            <h2 data-ddfw="non-semantic">Heading 2</h2>
            <p>Paragraph start.</p>
            <h3 data-ddfw="non-semantic">Heading 3</h3>
            <p>Paragraph start.</p>
            <h4 data-ddfw="non-semantic">Heading 4</h4>
            <p>Paragraph start.</p>
            <h5 data-ddfw="non-semantic">Heading 5</h5>
            <p>Paragraph start.</p>
            <h6 data-ddfw="non-semantic">Heading 6</h6>
            <p>Paragraph start.</p>
          </div>
        </div>
        <p>A primary header that starts a new section can be wrapped in <code><mark>&lt;div class="page-header"&gt;</mark></code> to set it apart a bit more. Following that header, a number of section summary paragraphs can be added.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <div class="page-header">
              <h1>Example with <code>h1</code> element</h1>
              <p>Etiam adipiscing diam non massa posuere consequat. Praesent vel auctor augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
          </div>
          <pre class="code">&lt;div class="page-header"&gt;
  &lt;h1&gt;Example with &lt;code&gt;h1&lt;/code&gt; element&lt;/h1&gt;
  &lt;p&gt;Etiam adipiscing diam non massa posuere consequat. Praesent vel auctor augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.&lt;/p&gt;
&lt;/div&gt;</pre>
        </div>
        <!-- [3.2 Body copy] -->
        <h2>Body copy</h3>
        <p>The best example of how body copy looks when using the framework is this page itself, which is built using the default settings. The font used for the main copy is <em>Helvetica</em>, monospaced text uses <em>Menlo</em>, and buttons use <em>Helvetica Neue</em> due to its more consistent baseline. The default size is 14px, with a line height of 20px.</p>
        <p>Regular text-level elements are all provided for. For example, <strong>strong</strong> and <em>emphasized</em> text, or <small>small</small>, <sub>subscript</sub> or <sup>superscript</sup> text—and many more.</p>
        <p>For a full list of visual elements and an overview of their usage, see our <a href="#sect_text-level_usage_summary">element usage table</a>.</p>
        <!-- [3.3 Lists] -->
        <h2>Lists</h2>
        <p>Lists are kept as close to regular HTML lists as possible. A single list item's bullet can be removed by adding the <code><mark>no-bullet</mark></code> class to the <code>&lt;li&gt;</code>. For a completely flat list, add the <code><mark>unstyled</mark></code> class to the <code>&lt;ul&gt;</code>.</p>
        <div class="box example with-label single">
          <p class="label">Example</p>
          <div class="result">
            <div class="row">
              <div class="col w-4">
                <ul>
                  <li>List item lv 1</li>
                  <li>List item lv 1
                    <ul>
                      <li>List item lv 2</li>
                      <li>List item lv 2</li>
                    </ul>
                  </li>
                  <li>List item lv 1
                    <ul>
                      <li>List item lv 2</li>
                      <li>List item lv 2
                        <ul>
                          <li>List item lv 3</li>
                          <li>List item lv 3</li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>List item lv 1</li>
                  <li class="no-bullet">List item without bullet</li>
                </ul>
              </div>
              <div class="col w-4">
                <ol>
                  <li>List item lv 1</li>
                  <li>List item lv 1
                    <ol>
                      <li>List item lv 2</li>
                      <li>List item lv 2</li>
                    </ol>
                  </li>
                  <li>List item lv 1
                    <ol>
                      <li>List item lv 2</li>
                      <li>List item lv 2
                        <ol>
                          <li>List item lv 3</li>
                          <li>List item lv 3</li>
                        </ol>
                      </li>
                    </ol>
                  </li>
                  <li>List item lv 1</li>
                  <li class="no-bullet">List item without bullet</li>
                </ol>
              </div>
              <div class="col w-4">
                <dl>
                  <dt>Definition term</dt>
                  <dd>Definition description</dd>
                </dl>
                <dl>
                  <dt>Definition term</dt>
                  <dt>Definition term</dt>
                  <dd>Definition description</dd>
                </dl>
                <dl>
                  <dt>Definition term</dt>
                  <dd>Definition description</dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
        <p>To display a list horizontally, the <code><mark>list-hrz</mark></code> class can be used. These can't be nested.</p>
        <div class="box example with-label single">
          <p class="label">Example</p>
          <div class="result">
            <ul class="list-hrz">
              <li>A</li>
              <li>B</li>
              <li>C</li>
            </ul>
          </div>
        </div>
        <p>By adding the <code><mark>justified</mark></code> class, a list is justified across the container's full width. Keep in mind that if the elements exceed the container size, wrapping will occur.</p>
        <div class="box example with-label single">
          <p class="label">Example</p>
          <div class="result">
            <ul class="list-hrz justified">
              <li>Add</li>
              <li>as</li>
              <li>many</li>
              <li>as</li>
              <li>you</li>
              <li>like.</li>
            </ul>
          </div>
        </div>
        <!-- [3.4 Quotations] -->
        <h2>Quotations</h2>
        <p>For minor, inline quotations, the <code><mark>&lt;q&gt;</mark></code> element can be used inside of a running text. For larger quotations, a <code><mark>&lt;blockquote&gt;</mark></code> can be used.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <blockquote>
              <p>It's always worth checking the source of a quote to ensure it has not been altered or fabricated.</p>
              <small>Barack Obama (1876) <cite>"The Complete Guide to Final Fantasy Lore", pp. 20–28</cite></small>
            </blockquote>
          </div>
          <pre class="code">&lt;blockquote&gt;
  &lt;p&gt;It's always worth checking the source of a quote to ensure it has not been altered or fabricated.&lt;/p&gt;
  &lt;small&gt;Barack Obama (1876) &lt;cite&gt;"The Complete Guide to Final Fantasy Lore", pp. 20–28&lt;/cite&gt;&lt;/small&gt;
&lt;/blockquote&gt;</pre>
        </div>
        <p>For longer quotations, it's possible to use multiple <code>&lt;p&gt;</code> elements inside of the <code>blockquote</code>.</p>
        <!-- [3.5 Ruby annotations] -->
        <h2>Ruby annotations</h2>
        <p>Support for <code>&lt;ruby&gt;</code> annotations is built-in. Currently, the only major rendering engine that does not support the Ruby module is Gecko (Firefox). All other rendering engines do not need the CSS code used to make it work on Gecko, but they should not be bothered by it either. Only basic elements of the Ruby module are implemented, since complex support cannot be added through CSS modifications alone.</p>
        <aside class="box bordered info icon">
          <p>You don't necessarily need to wrap an <code>&lt;rb&gt;</code> element around the character that's being explained. The first example uses the element, and the other ones don't. We do recommend always using a <code>&lt;p&gt;</code> element.</p>
        </aside>
        <aside class="box bordered warning icon">
          <p>Make sure to check browser support before using Ruby module features. A number of things are still not supported yet, such as the <code>rbspan</code> attribute.</p>
        </aside>
        <!-- Example 1 -->
        <p>A standard usage of Ruby is, for example, to give the reading of Japanese characters.</p>
        <div class="box example with-label single">
          <p class="label">Example 2: Word Reading</p>
          <div class="result">
            <p>
              <ruby>
                <rb>明日</rb><rp>（</rp><rt>あした</rt><rp>）</rp>
              </ruby>
            </p>
          </div>
        </div>
        <!-- Example 2 -->
        <div class="box example with-label single">
          <p class="label">Example 2: Per-Character Reading</p>
          <div class="result">
            <p>
              <ruby>漢<rp>（</rp><rt>かん</rt><rp>）</rp></ruby><ruby>字<rp>（</rp><rt>じ</rt><rp>）</rp></ruby>
            </p>
          </div>
        </div>
        <!-- Example 3 -->
        <p>You can also group characters and their readings in separate <code>&lt;rbc&gt;</code> containers.</p>
        <div class="box example with-label single">
          <p class="label">Example 3: Per-Character Reading (Separately Grouped)</p>
          <div class="result">
            <p>
              <!-- Example taken from <http://reference.sitepoint.com/html/rt/rbspan> -->
              <ruby>
                <rbc>
                  <rb>斎</rb>
                  <rb>藤</rb>
                  <rb>信</rb>
                  <rb>男</rb>
                </rbc>
                <rtc>
                  <rt>さい</rt>
                  <rt>とう</rt>
                  <rt>のぶ</rt>
                  <rt>お</rt>
                </rtc>
              </ruby>
            </p>
          </div>
        </div>
        <!-- Example 4 -->
        <p>Here's another example, using Ruby annotations to give word readings in a running text. As you can see in the page source, the <code>&lt;ruby&gt;</code> element needs to be inline—otherwise, superfluous spaces are added.</p>
        <div class="box example with-label single">
          <p class="label">Example 4: Running text (Japanese)</p>
          <div class="result">
            <p>きのうの豪雨で山の水源地は<ruby>氾濫<rp>（</rp><rt>はんらん</rt><rp>）</rp></ruby>し、濁流<ruby>滔々<rp>（</rp><rt>とうとう</rt><rp>）</rp></ruby>と下流に 集り、猛勢一挙に橋を破壊し、どうどうと響きをあげる激流が、<ruby>木葉微塵<rp>（</rp><rt>こっぱみじん</rt><rp>）</rp></ruby>に<ruby>橋桁<rp>（</rp><rt>はしげた</rt><rp>）</rp></ruby>を跳ね飛ばしていた。</p>
          </div>
        </div>
        <!-- Example 5 -->
        <div class="box example with-label single">
          <p class="label">Example 5: Running text (Pinyin)</p>
          <div class="result">
            <p>The <b>Grass Mud Horse</b>—<ruby>草泥馬<rp>(</rp><rt>Cǎo Ní Mǎ</rt><rp>)</rp></ruby>—is … characterised as “lively, intelligent and tenacious”. However, their existence is said to be threatened by the "river crabs"—<ruby>河蟹<rp> (</rp><rt>héxiè</rt><rp>) </rp></ruby>—which are invading their habitat.</p>
          </div>
        </div>
        <!-- Example 6 -->
        <p>It's possible to nest <code>&lt;ruby&gt;</code> elements.</p>
        <div class="box example with-label single">
          <p class="label">Example 6: Nested Ruby elements</p>
          <div class="result">
            <p><ruby><ruby>攻<rp>（</rp><rt>こう</rt><rp>）</rp></ruby><ruby>殻<rp>（</rp><rt>かく</rt><rp>）</rp></ruby><ruby>機<rp>（</rp><rt>き</rt><rp>）</rp></ruby><ruby>動<rp>（</rp><rt>どう</rt><rp>）</rp></ruby><ruby>隊<rp>（</rp><rt>たい</rt><rp>）</rp></ruby><rp>（</rp><rt>Kōkakukidōtai</rt><rp>）</rp></ruby></p>
          </div>
        </div>
        <p>Support will be improved as the module stabilizes.</p>
        <!-- [3.6 Programming code] -->
        <h2>Programming code</h2>
        <p>The proper tags for the use of inline programming code are as follows:</p>
        <dl>
          <dt><code>&lt;code&gt;</code></dt>
          <dd>Inline wrapper for programming code</dd>
          <dt><code>&lt;pre&gt;</code></dt>
          <dd>Block element for preformatted text</dd>
          <dt><code>&lt;samp&gt;</code></dt>
          <dd>For the output or log from a computer program</dd>
          <dt><code>&lt;kbd&gt;</code></dt>
          <dd>For user input (e.g. a key the user should press)</dd>
          <dt><code>&lt;var&gt;</code></dt>
          <dd>For variables</dd>
        </dl>
        <p>The <code>&lt;tt&gt;</code> tag, while supported by the framework, is not a part of the HTML5 spec, so its usage is discouraged.</p>
        <p>For brief, inline pieces of code, the <code>&lt;code&gt;</code> element should be used. For larger sections of programming code, a <code>&lt;pre&gt;</code> alone suffices.</p>
        <pre>&#x3C;pre&#x3E;Put your code here.&#x3C;/pre&#x3E;</pre>
        <p>If line numbers are needed, two things must be done the <code><mark>line-numbers</mark></code> class needs to be added to the <code>&lt;pre&gt;</code> tag, and the tag must be <a href="#">decorated</a>. This can be done with the following HTML:</p>
        <pre>&#x3C;pre ddfw-filter=&#x22;line-numbers&#x22; id=&#x22;a_code_sample&#x22;&#x3E;
Your code
goes here
&#x3C;/pre&#x3E;
&#x3C;script&#x3E;DadaFW.decorate(&#x22;a_code_sample&#x22;);&#x3C;/script&#x3E;</pre>
        <p>This has the following result:</p>
        <pre ddfw-filter="line-numbers" id="ex1">
Your code
goes here
</pre>
		<script>DadaFW.decorate("ex1");</script>
        <!-- [3.6.2 Syntax highlighting] -->
        <h3>Syntax highlighting</h3>
        <p>The framework supports the use of <a href="https://github.com/isagalaev/highlight.js">highlight.js</a> for client-side syntax highlighting.</p>
        <p>To enable syntax highlighting, add the value <code>syntax-hl</code> to the <code>ddfw-filter</code> attribute and then decorate it. In this example, we're also showing line numbers.</p>
        <pre ddfw-filter="line-numbers syntax-hl" id="ex2">
&#x3C;pre ddfw-filter=&#x22;line-numbers syntax-hl&#x22; id=&#x22;ex2&#x22;&#x3E;
function get_geometry(geo_size, world)
{
    geometry = new THREE.PlaneGeometry(geo_size, geo_size, world.width - 1, world.depth - 1);
    geometry.applyMatrix(new THREE.Matrix4().makeRotationX(-Math.PI / 2));
    geometry.dynamic = true;
    return geometry;
}
&#x3C;/pre&#x3E;</pre>
        <script>DadaFW.decorate("ex2");</script>
        <!-- [3.7 Tables] -->
        <h2>Tables</h2>
        <p>In order to apply standard CSS rules to a <code>&lt;table&gt;</code> element, the <code><mark>table</mark></code> class must be added—this prevents our rules from conflicting with other things tables are commonly used for. Any kind of table structure can be used.</p>
        <p>The following basic classes can be added:</p>
        <ul>
          <li><code>alt-cols</code> – gives every even column in the body section a darker color</li>
          <li><code>alt-rows</code> – gives every even row in the body section a darker color</li>
          <li><code>bordered</code> – adds a thin border around the entire table (and rounds the corners)</li>
          <li><code>col-borders</code> – adds vertical borders inside the table</li>
          <li><code>colgroup-borders</code> – adds vertical borders to <code>&lt;colgroup&gt;</code> elements (incompatible with <code>rounded</code>)</li>
          <li><code>hover</code> – makes all cells in the body section change color upon hover</li>
          <li><code>rounded</code> – rounds the corners of a table</li>
        </ul>
        <p>We've included example code in case you've forgotten what <code>&lt;table&gt;</code> markup looks like.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <table class="table alt-rows bordered">
              <caption>Basic table example</caption>
              <tr>
                <th>Header</th>
                <th>Header</th>
              </tr>
              <tr>
                <td>Data</th>
                <td>Data</th>
              </tr>
              <tr>
                <td>Data</th>
                <td>Data</th>
              </tr>
              <tr>
                <td>Data</th>
                <td>Data</th>
              </tr>
            </table>
          </div>
          <pre class="code">&lt;table class="table striped bordered"&gt;
  &lt;caption&gt;Basic table example&lt;/caption&gt;
  &lt;tr&gt;
      &lt;th&gt;Header&lt;/th&gt;
      &lt;th&gt;Header&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
      &lt;td&gt;Data&lt;/th&gt;
      &lt;td&gt;Data&lt;/th&gt;
  &lt;/tr&gt;
  ...
&lt;/table&gt;</pre>
        </div>
        <p>To get borders inside of the table you can use the <code>col-borders</code> class.</p>
        <p>If more specifivity is needed, you can use <code>&lt;column-group&gt;</code> elements to further divide your data into separate column groups (and if used together with the <code>col-borders</code> class, the group borders will be thicker than other inner borders).</p>
        <p>The following more complex example (which also demonstrates the use of <a href="#nolink">vector icons</a>) uses the <code>colgroup-borders</code> class to highlight the groups. Unfortunately, we can't display rounded corners when using column group borders due to limitations in CSS.</p>
        <div class="box example with-label single">
          <p class="label">Example with grouped columns</p>
          <div class="result">
            <table class="table bordered colgroup-borders">
              <caption>Code-page support in Microsoft Windows</caption>
              <colgroup></colgroup>
              <colgroup></colgroup>
              <colgroup span="2"></colgroup>
              <colgroup span="3"></colgroup>
              <thead valign="top">
                <tr>
                  <th>Code-Page <br />ID</th>
                  <th>Name</th>
                  <th>ACP</th>
                  <th>OEMCP</th>
                  <th>Windows <br />NT 3.1</th>
                  <th>Windows <br />NT 3.51</th>
                  <th>Windows <br />95</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1200</td>
                  <td>Unicode (BMP of ISO/IEC-10646)</td>
                  <td></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-asterisk"></i></td>
                </tr>
                <tr>
                  <td>1250</td>
                  <td>Windows 3.1 Eastern European</td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>1251</td>
                  <td>Windows 3.1 Cyrillic</td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>1252</td>
                  <td>Windows 3.1 US (ANSI)</td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>1253</td>
                  <td>Windows 3.1 Greek</td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>1254</td>
                  <td>Windows 3.1 Turkish</td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>1255</td>
                  <td>Hebrew</td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>1256</td>
                  <td>Arabic</td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>1257</td>
                  <td>Baltic</td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>1361</td>
                  <td>Korean (Johab)</td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td></td>
                  <td><i class="fa fa-asterisk"></i></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td>437</td>
                  <td>MS-DOS United States</td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>708</td>
                  <td>Arabic (ASMO 708)</td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>709</td>
                  <td>Arabic (ASMO 449+, BCON V4)</td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>710</td>
                  <td>Arabic (Transparent Arabic)</td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
                <tr>
                  <td>720</td>
                  <td>Arabic (Transparent ASMO)</td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                  <td></td>
                  <td></td>
                  <td><i class="fa fa-check"></i></td>
                </tr>
              </tbody>
            </table>
            <p><small>Source: <a href="http://msdn.microsoft.com/en-us/library/cc194884.aspx">Appendix E: Code Page Support in Microsoft Windows</a>, Microsoft Developer Network (msdn.microsoft.com)</small></p>
          </div>
        </div>
        <!-- [3.8 Text-level usage summary] -->
        <h2>Text-level usage summary</h2>
        <p>Use this as a reference guide for inline semantic text elements. This entire table and its examples have been taken from the W3C page <a href="http://www.w3.org/TR/html5/text-level-semantics.html#usage-summary">about text-level semantics</a> (modified slightly).</p>
        <table class="table bordered">
          <thead>
            <tr>
              <th>Element</th>
              <th>Purpose</th>
              <th>Example</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><code>a</code></td>
              <td>Hyperlinks</td>
              <td>Visit my <a href="drinks.html">drinks</a> page.</td>
            </tr>
            <tr>
              <td><code>em</code></td>
              <td>Stress emphasis</td>
              <td>I must say I <em>adore</em> lemonade.</td>
            </tr>
            <tr>
              <td><code>strong</code></td>
              <td>Importance</td>
              <td>This tea is <strong>very hot</strong>.</td>
            </tr>
            <tr>
              <td><code>small</code></td>
              <td>Side comments</td>
              <td>These grapes are made into wine. <small>Alcohol is addictive.</small></td>
            </tr>
            <tr>
              <td><code>s</code></td>
              <td>Inaccurate text</td>
              <td>Price: <s>&#163;4.50</s> &#163;2.00!</td>
            </tr>
            <tr>
              <td><code>cite</code></td>
              <td>Titles of works</td>
              <td>The case <cite>Hugo v. Danielle</cite> is relevant here.</td>
            </tr>
            <tr>
              <td><code>q</code></td>
              <td>Quotations</td>
              <td>The judge said <q>You can drink water from the fish tank</q> but advised against it.</td>
            </tr>
            <tr>
              <td><code>dfn</code></td>
              <td>Defining instance</td>
              <td>The term <dfn>organic food</dfn> refers to food produced without synthetic chemicals.</td>
            </tr>
            <tr>
              <td><code>abbr</code></td>
              <td>Abbreviations</td>
              <td>Organic food in Ireland is certified by the <abbr title="Irish Organic Farmers and Growers Association">IOFGA</abbr>.</td>
            </tr>
            <tr>
              <td><code>data</code></td>
              <td>Machine-readable equivalent</td>
              <td>Available starting today! <data value="UPC:022014640201">North Coast Organic Apple Cider</data></td>
            </tr>
            <tr>
              <td><code>time</code></td>
              <td>Machine-readable equivalent of date- or time-related data</td>
              <td>Available starting on <time datetime="2011-11-12">November 12th</time>!</td>
            </tr>
            <tr>
              <td><code>code</code></td>
              <td>Computer code</td>
              <td>The <code>fruitdb</code> program can be used for tracking fruit production.</td>
            </tr>
            <tr>
              <td><code>var</code></td>
              <td>Variables</td>
              <td>If there are <var>n</var> fruit in the bowl, at least <var>n</var>&#247;2 will be ripe.</td>
            </tr>
            <tr>
              <td><code>samp</code></td>
              <td>Computer output</td>
              <td>The computer said <samp>Unknown error -3</samp>.</td>
            </tr>
            <tr>
              <td><code>kbd</code></td>
              <td>User input</td>
              <td>Hit <kbd>F1</kbd> to continue.</td>
            </tr>
            <tr>
              <td><code>sub</code></td>
              <td>Subscripts</td>
              <td>Water is H<sub>2</sub>O.</td>
            </tr>
            <tr>
              <td><code>sup</code></td>
              <td>Superscripts</td>
              <td>The Hydrogen in heavy water is usually <sup>2</sup>H.</td>
            </tr>
            <tr>
              <td><code>i</code></td>
              <td>Alternative voice</td>
              <td>Lemonade consists primarily of <i>Citrus limon</i>.</td>
            </tr>
            <tr>
              <td><code>b</code></td>
              <td>Keywords</td>
              <td>Take a <b>lemon</b> and squeeze it with a <b>juicer</b>.</td>
            </tr>
            <tr>
              <td><code>u</code></td>
              <td>Annotations</td>
              <td>The mixture of apple juice and <u class="spelling">eldeflower</u> juice is very pleasant.</td>
            </tr>
            <tr>
              <td><code>mark</code></td>
              <td>Highlight</td>
              <td>Elderflower cordial, with one <mark>part</mark> cordial to ten <mark>part</mark>s water, stands a<mark>part</mark> from the rest.</td>
            </tr>
            <tr>
              <td><code>ruby</code>, <code>rb</code>, <code>rp</code>, <code>rt</code>, <code>rtc</code></td>
              <td>Ruby annotations</td>
              <td><ruby>OJ<rp> (</rp><rt>Orange Juice<rp>)</rp></ruby></td>
            </tr>
            <tr>
              <td><code>bdi</code></td>
              <td>Text directionality isolation</td>
              <td>The recommended restaurant is <bdi lang="">My Juice Café (At The Beach)</bdi>.</td>
            </tr>
            <tr>
              <td><code>bdo</code></td>
              <td>Text directionality formatting</td>
              <td>The proposal is to write English, but in reverse order. "Juice" would become "<bdo dir="rtl">Juice</bdo>".</td>
            </tr>
            <tr>
              <td><code>span</code></td>
              <td>Other</td>
              <td>In French we call it <span lang="fr">sirop de sureau</span>.</td>
            </tr>
            <tr>
              <td><code>br</code></td>
              <td>Line break</td>
              <td>Simply Orange Juice Company<br />Apopka, FL 32703<br />U.S.A.</td>
            </tr>
            <tr>
              <td><code>wbr</code></td>
              <td>Line breaking opportunity</td>
              <td>www.simply<wbr />orange<wbr />juice.com</td>
            </tr>
          </tbody>
        </table>
        <p><small>Source: <a href="http://www.w3.org/TR/html5/text-level-semantics.html#usage-summary">4.5 Text-level semantics (4.5.31 Usage summary)</a>, HTML5 Working Draft (w3.org). By the W3C HTML Working Group. Retrieved Jun 23, 2014.</small></p>
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
                <ul class="dropdown-menu">
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
&lt;ul class="dropdown-menu"&gt;
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
                      <ul class="dropdown-menu">
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
      &lt;ul class="dropdown-menu"&gt;
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
  </div>
</div>
