
  <?php

  include __DIR__.'/server.php';
  include __DIR__."/../partials/header.php";
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



<?php
  include __DIR__."/../partials/footer.php";
 ?>
