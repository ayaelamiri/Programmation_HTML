<?php

include 'connect.php';

$sqlblanceenergrtique = "SELECT * FROM blanceenergrtique";
$resultblanceenergrtique = $conn->query($sqlblanceenergrtique);

if ($resultblanceenergrtique->num_rows > 0) {
  // output data of each row
  while($rowblanceenergrtique = $resultblanceenergrtique->fetch_assoc()) {
   //  "id: " . $row["id"]. " - Reseau: " . $row["Reseau"]. " " . $row["energiesolaire"]. "<br>";
    $Reseauemparrayblanceenergrtique[]= $rowblanceenergrtique["Reseau"];
   
   $energiesolaireemparrayblanceenergrtique[] = $rowblanceenergrtique["energiesolaire"];
     
   // print  $energiesolaire[] = $row["energiesolaire"];
    // print  $Reseau[] = $row["Reseau"];
  }
} else {
  echo "0 results";
}

print_r( $Reseauemparrayblanceenergrtique[0]);
print_r( $energiesolaireemparrayblanceenergrtique[0]);
//$conn->close();
/*$ES= $energiesolaire;
$R= $Reseau;*/
/*print_r ($ES);
print_r ($R);*/
//echo json_encode($emparray);
/*echo json_encode($ES);
echo json_encode($R);*/
//print_r ($a[1]);

?>