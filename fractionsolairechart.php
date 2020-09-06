<?php

include 'connect.php';

$sqlfractionsolaire = "SELECT * FROM fractionsolaire";
$resultfractionsolaire = $conn->query($sqlfractionsolaire);

if ($resultfractionsolaire->num_rows > 0) {
  // output data of each row
  while($rowfractionsolaire = $resultfractionsolaire->fetch_assoc()) {
  
   //  $emparray = $row;
   $matinfractionsolaire[] = $rowfractionsolaire["matin"];
   $apresmidifractionsolaire[] = $rowfractionsolaire["apresmidi"];
   $finjeurneefractionsolaire[] = $rowfractionsolaire["finjeurnee"];
     
 
  }
} else {
  echo "0 results";
}
print_r($matinfractionsolaire[0]);
print_r($apresmidifractionsolaire[0]);
print_r($finjeurneefractionsolaire[0]);
//$conn->close();

//echo json_encode($emparray);


?>

