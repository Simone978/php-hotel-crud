<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/app.css">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Tutte le stanze</h1>
        <table class='table'>
          <thead>
            <tr>
              <th>id</th>
              <th>Numero stanza</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include __DIR__.'/database.php';
            if(!empty($rooms)){
            foreach ($rooms as $room) {?>
              <tr>
                <td><?php echo $room['id'] ?></td>
                <td><?php echo $room['room_number'] ?></td>
                <td><a href="http://localhost:88/php/php-hotel-crud/show/show.php/?id=<?php echo $room['id'] ?>">Visualizza</a></td>
              </tr>
            <?php }
          } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>



</body>
</html>
