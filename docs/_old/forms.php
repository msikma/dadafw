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
      
      
      </section>
    </article>
    <footer class="row">
      <div class="col w-12">
        <p>footer</p>
      </div>
    </footer>
  </div>
</div>