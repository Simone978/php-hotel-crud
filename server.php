<?php

include 'database.php';
include 'functions.php';

$results = getAll($conn, 'stanze');

// $sql = "SELECT * FROM stanze";
// $result = $conn->query($sql);
// if ($result && $result->num_rows > 0) {
// // output data of each row
//  $rooms = [];
// while($row = $result->fetch_assoc()) {
// //echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
//  $rooms[] = $row;
// }
// } elseif ($result) {
//   echo "0 results";
// } else {
//   echo "query error";
// }
// $conn->close();
