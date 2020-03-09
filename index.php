  <?php
  include __DIR__."/partials/header.php";
  include __DIR__."/env.php";
   ?>

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
              include __DIR__.'/server.php';
              if(!empty($rooms)){
              foreach ($rooms as $room) {?>
                <tr>
                  <td><?php echo $room['id'] ?></td>
                  <td><?php echo $room['room_number'] ?></td>
                  <td><a href="http://localhost:88/php/php-hotel-crud/show/show.php/?id=<?php echo $room['id'] ?>">Visualizza</a></td>
                  <td><a href="http://localhost:88/php/php-hotel-crud/update/form.php/?id=<?php echo $room['id'] ?>">Modifica</a></td>
                  <td>
                    <form action="http://localhost:88/php/php-hotel-crud/delete/server.php" method="post">
                      <input type="hidden" name="id" value = <?php echo $room['id'] ?>>
                      <input class="btn btn-danger" type="submit" value= "Cancella">
                    </form>
                  </td>
                </tr>
              <?php }
            } ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>


  <?php
  include __DIR__.'/partials/footer.php';
   ?>
