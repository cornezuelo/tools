<?php
$tools = ["" => ""];
$classes = [];
foreach (glob('actions/*.php') as $file)
{
	require_once $file;

	// get the file name of the current file without the extension
	// which is essentially the class name
	$class = basename($file, '.php');

	if (class_exists($class) && $class != 'ActionAbstract')
	{		
		$obj = new $class;
		$tools[$obj->getUid()] = $obj->getLabel();		
		$classes[$obj->getUid()] = $obj;
	}	
}
