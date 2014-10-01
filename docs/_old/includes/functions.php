<?php

// Dada Web Framework
// ---------------------------------------------------------------------
// Copyright (C) 2013-2014, Michiel Sikma <info@michielsikma.com>
// All Rights Reserved

namespace dadafw;

define('EOL', "\n");

$defaults = array(
	'main_title' => 'Dada Web Framework',
	'bar' => str_repeat('―', 74),
	'title_sep' => ' - ',
	'copyright' => 'Copyright (C) 2014, Michiel Sikma <mike@letsdeliver.com>
All Rights Reserved',
	'author' => 'Michiel Sikma <mike@letsdeliver.com>',
	'description' => '',
	'viewport' => 'user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, width=device-width',
	'base_url' => './',
	'main_content' => '<p>Error: no %main_content%</p>',
	'xtra_css' => '',
	'xtra_js' => '',
);

// The documentation layout container.
ob_start();
include('layout.php');
$layout = trim(ob_get_clean());

function docs($buffer)
{
	global $defaults;
	global $vars;
	global $layout;
	
	// Merge the defaults and the custom defined variables,
	// giving preference to the custom ones.
	$vars = array_merge($defaults, $vars);
	
	// Construct the full title variable.
	$title_els = array($vars['main_title']);
	if (isset($vars['title'])) {
		$title_els[] = $vars['title'];
	}
	$vars['full_title'] = implode($vars['title_sep'], $title_els);
	
	// Add linebreaks to the %xtra_css% and %xtra_js% variables
	// in case they have any content.
	$vars['xtra_css'] = $vars['xtra_css'] !== '' ? EOL.$vars['xtra_css'] : '';
	$vars['xtra_js'] = $vars['xtra_js'] !== '' ? EOL.$vars['xtra_js'] : '';
	
	// Stick the current docs page into the layout.
	$layout = repl_vars($layout, array(
		'main_content' => trim($buffer),
	));
	// Replace variable markers.
	$layout = repl_vars($layout, $vars);
	
	return $layout;
}

function repl_vars($layout, $vars, $prcify=true)
{
	// Replace variable placeholders with values.
	$prc = $prcify ? '%' : '';
	foreach ($vars as $var => $val) {
		$layout = str_replace($prc.$var.$prc, $val, $layout);
	}
	return $layout;
}
