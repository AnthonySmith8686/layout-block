<?php
// This file is generated. Do not modify it manually.
return array(
	'column' => array(
		'apiVersion' => 2,
		'name' => 'super-layout/column',
		'title' => 'Column',
		'category' => 'layout',
		'parent' => array(
			'super-layout/layout'
		),
		'icon' => 'editor-table',
		'supports' => array(
			'html' => false
		),
		'editorScript' => 'file:./index.js',
		'style' => 'file./style.css'
	),
	'layout' => array(
		'apiVersion' => 2,
		'name' => 'super-layout/layout',
		'title' => 'Super Layout',
		'category' => 'layout',
		'icon' => 'columns',
		'description' => 'A responsive layout block with customizable columns.',
		'attributes' => array(
			'columns' => array(
				'type' => 'number',
				'default' => 3
			),
			'gap' => array(
				'type' => 'number',
				'default' => 16
			)
		),
		'providesContext' => array(
			'super-layout/columns' => 'columns'
		),
		'supports' => array(
			'html' => false
		),
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style.css',
		'render' => 'file:./render.php'
	)
);
