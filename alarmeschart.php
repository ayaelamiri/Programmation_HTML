<?php

include 'connect.php';

$sqlalarmes = "SELECT * FROM alarmes";
$resultalarmes = $conn->query($sqlalarmes);

if ($resultalarmes->num_rows > 0) {
  // output data of each row
  while($rowalarmes = $resultalarmes->fetch_assoc()) {
  
     $Injectionrealarmes[] = $rowalarmes["Injectionreseau"];
     $onduleurempalarmes[] = $rowalarmes["onduleur"];
     $Pertecommunicationempalarmes[] = $rowalarmes["Pertecommunication"];
     
 
  }
} else {
  echo "0 results";
}
//$conn->close();

//echo json_encode($emparray);
print_r($Injectionrealarmes[0]);
print_r($onduleurempalarmes[0]);
print_r($Pertecommunicationempalarmes[0]);



?>