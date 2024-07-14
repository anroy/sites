<?php 
// Script 3.3 handle_form.php
// This page receives the data from form.html.
// It will receive: field1, field2, message, submitted by $_POST.

// Create shorthand versions of the variables:
$param1 	= $_POST['param1'];
$param2		= $_POST['param2'];
$xmlBody 	= $_POST['xmlBody'];

$xmlDocument = new SimpleXMLElement($xmlBody);
echo "Document top node: " . $xmlDocument->getName();
echo "<br />";

echo $xmlDocument->count() . " item nodes in document";
echo "<br />";
echo "<br />";

$i = 1;
foreach( $xmlDocument->children() as $xmlItem ) {
	echo "<u>";
	echo $xmlItem->getName() . " node #" . $i;
	echo "</u>";
	echo "<br />";

	echo "Item attributes:";
	echo "<ol>";
	foreach( $xmlItem->attributes() as $attrName => $attrValue) {
		echo "<li>" . $attrName . "=" . $attrValue . "</li>";
	}
	echo "</ol>";

	echo "Item elements:";
	echo "<ol>";
	foreach( $xmlItem->children() as $xmlElement ) {
		echo "<li>" . $xmlElement->getName() . " : " . $xmlElement . "</li>";
	}
	echo "</ol>";
	echo "<br />";
	
	$i++;
}
?>
