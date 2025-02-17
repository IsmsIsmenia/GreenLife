<?php
require(../../banco.php);

 function parseToXML($htmlStr){
    $xmlSrt=srt_replace ('<','&lt;',$htmlStr);
    $xmlSrt=srt_replace ('>','&gt;',$xmlStr);
    $xmlSrt=srt_replace ('"','&quot;',$xmlStr);
    $xmlSrt=srt_replace ("'",'&=39;',$xmlStr);
    $xmlSrt=srt_replace ("&",'&amp;',$xmlStr);
    return $xmlStr;
 }

$sql = "select coord from tbdenuncia"

$result = mysqli_query($sql);

head("Content-type: text/xml")

//Start XML file, echo parent node 
echo '<mapa>'

while($row = mysqli_fetch_assoc($result)){
   echo '<mapa';
   echo 'name="' . parseToXML($row{'name'}) . '" ';
   echo 'address="' . parseToXML($row['address']) . '" ';
   echo 'lat="' . $row['lat'] . '" ';
   echo 'lng="' . $row['lng'] . '" ';
   echo 'tyoe="' . $row['type'] . '" ';
   echo '/>';
}

echo '</mapa>';
?>  