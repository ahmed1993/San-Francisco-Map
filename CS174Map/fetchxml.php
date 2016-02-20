<?php
 require_once('config.php');
//Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

//Opens a connection to the db2 server
$connection = db2_connect($dbname, $username, $password);
if(!$connection){
    die('Not connected : '.db2_conn_error());
}

//execute the query
$sql = "Select name1,street,city,state,zip,county,lat, long from ".$computerName.".school";
$stmt = db2_prepare($connection, $sql);
db2_execute($stmt);


header("Content-type: text/xml");

//iterate through the rows adding xml nodes for each
while($row = db2_fetch_assoc($stmt)) {  
  // ADD TO XML DOCUMENT NODE
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name",$row['NAME1']);
  $newnode->setAttribute("street", $row['STREET']);
  $newnode->setAttribute("city", $row['CITY']);
  $newnode->setAttribute("state", $row['STATE']);
  $newnode->setAttribute("zip", $row['ZIP']);
  $newnode->setAttribute("county", $row['COUNTY']);
  $newnode->setAttribute("latitude", $row['LAT']);
  $newnode->setAttribute("longitude", $row['LONG']);
}
echo $dom->saveXML();

?>