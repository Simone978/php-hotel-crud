<?php

include __DIR__."/../env.php";
include __DIR__."/../database.php";

if(empty($_POST['id'])){
  die('id mancante');
}

$id = $_POST['id'];


$sql = "DELETE FROM stanze WHERE id = $id;";
$result = $conn->query($sql);
//if ($result && $result->num_rows > 0) {
// output data of each row
//$row = $result->fetch_assoc();
//var_dump($row);
header('Location: http://localhost:88/php/php-hotel-crud/');
//} elseif ($result) {
//echo "0 results";
//} else {
//echo "query error";
//}
$conn->close();
