<?php

function getAll($conn, $table)
{
  $sql = "SELECT * FROM $table";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
  // output data of each row
   $results = [];
  while($row = $result->fetch_assoc()) {
  //echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
   $results[] = $row;
  }
  } elseif ($result) {
    return  $results=[];
  } else {
    return false;
  }
  // $conn->close();
  return $results;
}

function getId($conn, $table, $id)
{
  $sql = "SELECT * FROM $table WHERE id = $id" ;
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
  // output data of each row
   $rooms = [];
  while($row = $result->fetch_assoc()) {
  //echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
   $rooms[] = $row;
  }
} elseif ($result) {
  return  $rooms=[];
} else {
  return false;
}
// $conn->close();
return $rooms;
}
