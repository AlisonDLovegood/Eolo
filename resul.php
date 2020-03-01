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
$result_markers = "SELECT aero1.aer_latitude as latitude1, aero1.aer_longitude as longitude1, aero2.aer_latitude as latitude2, aero2.aer_longitude as longitude2, voo_hr_saida, voo_hr_chegada, voo_dt_chegada, 

ROUND((1-(timediff(TIME(CURRENT_TIMESTAMP), voo_hr_saida)/timediff(voo_hr_chegada, voo_hr_saida)))*(aero1.aer_latitude)+((timediff(TIME(CURRENT_TIMESTAMP), voo_hr_saida)/timediff(voo_hr_chegada, voo_hr_saida)))*(aero2.aer_latitude),6) as latok, 

ROUND((1-(timediff(TIME(CURRENT_TIMESTAMP), voo_hr_saida)/timediff(voo_hr_chegada, voo_hr_saida)))*(aero1.aer_longitude)+((timediff(TIME(CURRENT_TIMESTAMP), voo_hr_saida)/timediff(voo_hr_chegada, voo_hr_saida)))*(aero2.aer_longitude),6) as lonok 

FROM tb_voos join tb_aeroportos aero1 on voo_aer_codigo_origem = aero1.aer_codigo join tb_aeroportos aero2 on voo_aer_codigo_destino = aero2.aer_codigo

where (TIME(CURRENT_TIMESTAMP) between voo_hr_saida and voo_hr_chegada) and (voo_dt_chegada = CURDATE())
";
$resultado_markers = mysqli_query($MySQLi, $result_markers);

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row_markers = mysqli_fetch_assoc($resultado_markers)){
  // Add to XML document node
  echo '<marker ';
  echo 'name="' . parseToXML($row_markers['voo_hr_saida']) . '" ';
  echo 'address="' . parseToXML($row_markers['voo_hr_chegada']) . '" ';
  echo 'lat="' . $row_markers['latok'] . '" ';
  echo 'lng="' . $row_markers['lonok'] . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';



