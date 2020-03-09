<?php
  include_once __DIR__.'/../env.php';
  include __DIR__.'/../database.php';

  if(empty($_POST['room_number'])){
    die('room_number mancante');
  }
  if(empty($_POST['floor'])){
    die('floor mancante');
  }
  if(empty($_POST['beds'])){
    die('beds mancante');
  }

  $room_number = $_POST['room_number'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

  // $sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES ($room_number, $floor, $beds, NOW(), NOW())";
  // $result = $conn->query($sql);

  $stmt = $conn->prepare("INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())");
  $stmt->bind_param("iii", $room_number, $floor, $beds);
  $stmt->execute();


  header("Location: $basepath");
  if($result){
    echo "inserimento riuscito";
  }else{
    echo "non riuscito";
  }
