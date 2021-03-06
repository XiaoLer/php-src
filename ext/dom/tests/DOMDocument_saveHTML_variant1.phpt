--TEST--
DOMDocument::saveHTML() optional parameters
--SKIPIF--
<?php
require_once dirname(__FILE__) .'/skipif.inc';
?>
--FILE--
<?php
$doc = new DOMDocument('1.0');
$root = $doc->createElement('html');
$root = $doc->appendChild($root);
$head = $doc->createElement('head');
$head = $root->appendChild($head);
$title = $doc->createElement('title');
$title = $head->appendChild($title);
$text = $doc->createTextNode('This is the title');
$text = $title->appendChild($text);
echo $doc->saveHTML(NULL), "\n";
echo $doc->saveHTML($title), "\n";
?>
--EXPECT--
<html><head><title>This is the title</title></head></html>

<title>This is the title</title>
