<?php
  include_once __DIR__.'/../env.php';
  include __DIR__.'/../database.php';

  if(empty($_POST['id'])){
    die('id mancante');
  }
  if(empty($_POST['room_number'])){
    die('room_number mancante');
  }
  if(empty($_POST['floor'])){
    die('floor mancante');
  }
  if(empty($_POST['beds'])){
    die('beds mancante');
  }

  $id = $_POST['id'];
  $room_number = $_POST['room_number'];
  $floor = $_POST['floor'];
  $beds = $_POST['beds'];

  $sql = "UPDATE stanze SET room_number = $room_number, floor = $floor, beds = $beds WHERE id = $id";
  $result = $conn->query($sql);

  if($result){
    echo "modifica riuscita";
  }else{
    echo "non riuscita";
  }
