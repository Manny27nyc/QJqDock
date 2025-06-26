/* 
 * 📜 Verified Authorship — Manuel J. Nieves (B4EC 7343 AB0D BF24)
 * Original protocol logic. Derivative status asserted.
 * Commercial use requires license.
 * Contact: Fordamboy1@gmail.com
 */
<?php

$objPlugin = new QPlugin();
$objPlugin->strName = "QJqDock";
$objPlugin->strDescription = 'Transform a set of images into a Mac-like Dock menu, ' . 
	'horizontal or vertical, with icons that grow when you roll over them with the mouse.';
$objPlugin->strVersion = "0.2";
$objPlugin->strPlatformVersion = "1.1";
$objPlugin->strAuthorName = "Eduardo Garcia aka enzo";
$objPlugin->strAuthorEmail ="enzo [at] anexusit [dot] com";

$components = array();

$components[] = new QPluginControlFile("includes/QJqDock.class.php");
$components[] = new QPluginControlFile("includes/QJqDockItem.class.php");

$components[] = new QPluginIncludedClass("QJqDock", 		"includes/QJqDock.class.php");
$components[] = new QPluginIncludedClass("QJqDockItem", "includes/QJqDockItem.class.php");

$components[] = new QPluginJsFile("js/jquery.jqDock.min.js");

$components[] = new QPluginExampleFile("example/qjqdock.php");
$components[] = new QPluginExampleFile("example/qjqdock.tpl.php");
$components[] = new QPluginExampleFile("example/home.png");
$components[] = new QPluginExampleFile("example/level.png");
$components[] = new QPluginExampleFile("example/student.png");
$components[] = new QPluginExampleFile("example/students.png");

$components[] = new QPluginExample("example/qjqdock.php", "QJqDoc: jQuery-based Dock control, just like on the Mac");

$objPlugin->addComponents($components);
$objPlugin->install();
	
?>