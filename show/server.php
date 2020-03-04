<?php

include __DIR__.'/../env.php';
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn && $conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
};
$id = $_GET['id'];
$sql = "SELECT * FROM stanze WHERE id = $id" ;
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
// output data of each row
 $rooms = [];
while($row = $result->fetch_assoc()) {
//echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
 $rooms[] = $row;
}
} elseif ($result) {
  echo "0 results";
} else {
  echo "query error";
}
$conn->close();
