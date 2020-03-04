<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../dist/app.css">
  <title>Document</title>
</head>
<body>
  <?php
  include __DIR__.'/server.php';
  if(!empty($rooms)){
  foreach ($rooms as $room) { ?>
    <ul>
      <li>ID: <?php echo $room['id'] ?></li>
      <li>Numero Stanza: <?php echo $room['room_number'] ?></li>
      <li>Piano n. <?php echo $room['floor'] ?></li>
      <li>Numero letti: <?php echo $room['beds'] ?></li>
    </ul>
  <?php }
} ?>



</body>
