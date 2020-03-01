<?php
include("config.php");
require("config.php");

function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}

// Select all the rows in the markers table
$result_markers = "SELECT aer_nome, aer_cidade, aer_latitude, aer_longitude FROM tb_aeroportos";
$resultado_markers = mysqli_query($MySQLi, $result_markers);

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row_markers = mysqli_fetch_assoc($resultado_markers)){
  // Add to XML document node
  echo '<marker ';
  echo 'name="' . parseToXML($row_markers['aer_nome']) . '" ';
  echo 'address="' . parseToXML($row_markers['aer_cidade']) . '" ';
  echo 'lat="' . $row_markers['aer_latitude'] . '" ';
  echo 'lng="' . $row_markers['aer_longitude'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';



