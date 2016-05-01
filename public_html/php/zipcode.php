<?php
// Use get request to get city, state matching supplied zipcode

require_once("../connect.php");

$stmt = $conn->prepare("SELECT state, city FROM zipcodes WHERE zip = :zipcode");
$stmt->bindParam(":zipcode", $zipcode);

$zipcode = $_POST["zip"];
$stmt->execute();

echo "Does this work?";
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//     echo "{ state : " . $row['state'] . ", city : " . $row['city'] . " }";
// }

?>