<?php

// Dada Web Framework
// ---------------------------------------------------------------------
// Copyright (C) 2013-2014, Michiel Sikma <info@michielsikma.com>
// All Rights Reserved

include('./includes/functions.php');

$vars = array(
  'title' => 'Documentation (Overview and Typography)',
  'description' => 'Main documentation showcasing the grid system, basic scaffolding and typography capabilities.',
  'xtra_js' => '<script type="text/javascript" src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>',
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
        <div class="grid-visible">
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
        <div class="grid-visible">
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
        <div class="grid-visible">
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
          <pre class="code"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"grid centered"</span><span class="nt">&gt;</span>
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
        <p>Lists are kept as close to regular HTML lists as possible. A list item's bullet can be removed by adding the <code><mark>no-bullet</mark></code> class to the <code>&lt;li&gt;</code>.</p>
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
        <p>The proper tags for the use of inline programming code are <code>&lt;code&gt;</code>, <code>&lt;samp&gt;</code>, <code>&lt;kbd&gt;</code> and <code>&lt;var&gt;</code>. The <code>&lt;tt&gt;</code> tag, while supported, is not a valid part of HTML5 and so its usage is discouraged.</p>
        <p>For larger sections of programming code, a <code>&lt;pre&gt;</code> container element should be used. Keep in mind all code inside should be escaped.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <pre><code>while (attacker_square &gt;= 0x00 &amp;&amp; attacker_square &lt;= 0x7f) {
  attacker_square += offset;  
  if (attacker_square &amp; 0x88) {
      /* Not a legal square. */
      break;
  }
}</code></pre>
          </div>
          <pre class="code">&lt;pre&gt;&lt;code&gt;while (attacker_square &gt;= 0x00 &amp;amp;&amp;amp; attacker_square &lt;= 0x7f) {
  attacker_square += offset;  
  if (attacker_square &amp;amp; 0x88) {
      /* Not a legal square. */
      break;
  }
}&lt;/code&gt;&lt;/pre&gt;</pre>
        </div>
        <!-- [3.6.1 Line numbers] -->
        <h3>Line numbers</h3>
        <p><strong>If line numbers are needed,</strong> the <code><mark>line-numbers</mark></code> class needs to be added to the <code>&lt;pre&gt;</code> tag, and the code itself should be put in an <code><mark>&lt;ol&gt;</mark></code>.</p>
        <div class="box example with-label">
          <p class="label">Example</p>
          <div class="result">
            <pre class="line-numbers">
              <ol>
                <li>var square_down = square - (0x10 * (player == WHITE ? 1 : -1));</li>
                <li>if (attacked_piece == PAWN          // if the attacked piece is a pawn</li>
                <li>&&  square_down === board.ep_square // and it just moved two squares</li>
                <li>&&  ep_attacks != true) {           // and we're doing a normal check</li>
                <li>    var ep_attacks = self.get_square_threats(square_down, player, true);</li>
                <li>    attacks = attacks.concat(ep_attacks);</li>
                <li>}</li>
              </ol>
            </pre>
          </div>
          <pre class="code">&lt;pre class="line-numbers"&gt;
  &lt;ol&gt;
      &lt;li&gt;var square_down = square - (0x10 * (player == WHITE ? 1 : -1));&lt;/li&gt;
      &lt;li&gt;if (attacked_piece == PAWN          // if the attacked piece is a pawn&lt;/li&gt;
      &lt;li&gt;&amp;&amp;  square_down === board.ep_square // and it just moved two squares&lt;/li&gt;
      &lt;li&gt;&amp;&amp;  ep_attacks != true) {           // and we're doing a normal check&lt;/li&gt;
      &lt;li&gt;    var ep_attacks = self.get_square_threats(square_down, player, true);&lt;/li&gt;
      &lt;li&gt;    attacks = attacks.concat(ep_attacks);&lt;/li&gt;
      &lt;li&gt;}&lt;/li&gt;
  &lt;/ol&gt;
&lt;/pre&gt;</pre>
        </div>
        <p>You can also add the <code><mark>inline</mark></code> class to the element for inline preformatted text.</p>
        <!-- [3.6.2 Syntax highlighting] -->
        <h3>Syntax highlighting</h3>
        <p>The recommended method for introducing syntax highlighting into your code is through server-side processing. The framework supports <a href="http://pygments.org/" target="_blank">Pygments</a> classes for this purpose—simply replace the plain code with the HTML tagged version.</p>
        <p>In case server-side processing is not possible, Google's <a href="https://code.google.com/p/google-code-prettify/">Prettify</a> script is a good alternative. Since Google's autoloader JS code includes CSS that breaks the framework's <code>&lt;pre&gt;</code> style, it's recommended to not use it. Prettify CSS styles are included with an optional framework compile flag.</p>
        <pre class="prettyprint"><code>+(function init()
{
    camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 1, geo_size);
    camera.position.y = 200;
    scene = new THREE.Scene();
    scene.fog = new THREE.FogExp2(color_bg, 0.0008);
    
    geometry = new THREE.PlaneGeometry(geo_size, geo_size, worldWidth - 1, worldDepth - 1);
    geometry.applyMatrix(new THREE.Matrix4().makeRotationX(-Math.PI / 2));
    geometry.dynamic = true;
    
    var texture = THREE.ImageUtils.loadTexture(window._settings.static_url+texture_url);
    texture.wrapS = texture.wrapT = THREE.RepeatWrapping;
    texture.repeat.set(texture_wrap, texture_wrap);
    
    material = new THREE.MeshBasicMaterial({
        color: color_fg,
        map: texture
    });
})(argument)</code></pre>
        <p class="fg-red-m3">todo: need decorator code</p>
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
      </section>
    </article>
    <footer class="row">
      <div class="col w-12">
        <p>footer</p>
      </div>
    </footer>
  </div>
</div>
