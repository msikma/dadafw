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
);

ob_start('dadafw\docs');

?>
<p class="aural-only"><a href="#content">Jump to content</a></p>

<!-- Start of navbar -->
<div class="navbar">
	<ul class="nav float-left">
		<li class="active"><a href="#">Link</a></li>
		<li><a href="#">Link</a></li>
		<li>
			<ul class="dropdown">
				<li><a href="#">New</a></li>
				<li><a href="#">Open…</a></li>
				<li><a href="#">Open Recent…</a></li>
				<li class="separator"></li>
				<li><a href="#">Page Setup…</a></li>
				<li><a href="#">Print…</a></li>
				<li><a href="#">Print Selection…</a></li>
			</ul>
		</li>
	</ul>
	<form role="form" class="inline float-left">
		<fieldset>
			<p><button class="btn primary" type="submit">Search</button><input type="text" name="username" id="ex1" placeholder="Search" class="line"></p>
		</fieldset>
	</form>
	<ul class="nav float-right">
		<li class="active"><a href="#">Link</a></li>
		<li><a href="#">Link</a></li>
	</ul>
</div>
<!-- End of navbar -->

<div class="grid centered">
	<div class="row">
		<div class="col w-12">
			<p>asdf</p>
		</div>
	</div>
</div>