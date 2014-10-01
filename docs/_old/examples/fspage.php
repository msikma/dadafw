<?php

// Dada Web Framework
// ---------------------------------------------------------------------
// Copyright (C) 2013-2014, Michiel Sikma <info@michielsikma.com>
// All Rights Reserved

include('../includes/functions.php');

$vars = array(
  'title' => 'Example Layout (Navbar Demonstration)',
  'description' => 'Example layout demonstrating the use of navbars.',
  'base_url' => '../',
  'xtra_css' => '  <style type="text/css">
  .example-content-inside {
    padding: 5em 4em;
    text-shadow: 0 1px 1px black;
    text-align: center;
  }
  .example-content-after {
    padding: 3em 0 5em;
  }
  </style>',
);

ob_start('dadafw\docs');

?>
<div class="landing-page">
  <img class="banner" src="%base_url%static/banner.jpg" alt="" width="1200" height="798" />
  <div class="content">
    <!-- Start of inner content -->
    <div class="grid centered">
      <div class="example-content-inside">
        <h1>Welcome to the Company, Inc. Website</h1>
        <p>Vivamus non lobortis odio. Nulla libero orci, rhoncus id aliquet a, rutrum at erat. Morbi vel lacinia dui.</p>
      </div>
    </div>
    <!-- End of inner content -->
  </div>
</div>

<div class="grid centered">
  <div class="example-content-after">
    <h1>Content following the photo</h1>
    <div class="colspan-2">
      <p>Nulla tempor hendrerit velit a mattis. Maecenas hendrerit vestibulum ligula, vitae bibendum risus egestas eu. Etiam adipiscing, eros ac viverra rhoncus, nibh turpis tempor libero, in tristique turpis nisi id dui. Maecenas adipiscing est vitae neque facilisis, adipiscing dapibus turpis scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam venenatis tempor sapien nec ultrices. Nunc vitae nisl porta, accumsan diam eget, consequat tortor. Integer congue fermentum augue ac ornare.</p>
      <p>Mauris sagittis justo fringilla, mattis massa vitae, varius enim. Nulla aliquet risus tortor. Curabitur imperdiet lectus et ullamcorper fringilla. Quisque ultrices, lectus at sagittis viverra, elit quam interdum mauris, dignissim posuere dolor metus at arcu. Vivamus non lobortis odio. Nulla libero orci, rhoncus id aliquet a, rutrum at erat. Morbi vel lacinia dui. Praesent sagittis arcu a tortor tempus sodales. In et convallis lectus. Fusce volutpat cursus lacus sit amet vestibulum. In pharetra est dolor, ac interdum tortor cursus eget. Quisque elementum lacus in tincidunt pellentesque.</p>
      <p>Donec ut rhoncus nunc. Nunc laoreet odio lorem, sed suscipit justo scelerisque vitae. Praesent vitae fermentum turpis. Aliquam erat volutpat. Nullam accumsan mi metus. Vestibulum id gravida odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec lobortis justo nulla, ut fringilla risus cursus sed. Cras rhoncus bibendum diam et luctus. In sit amet neque et velit molestie dictum sit amet a nisl.</p>
    </div>
  </div>
</div>
