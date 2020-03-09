<?php
  include __DIR__.'\..\partials\header.php';
  include_once __DIR__.'\..\env.php';
  include __DIR__.'\..\database.php';

  $id = $_GET['id'];

  $sql = "SELECT * FROM stanze WHERE id = $id ";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
  };


 ?>

 <div class="container">
   <div class="col-12">
     <form action= "<?php echo $basepath ?>/update/server.php" method="post">
       <div class="form-group">
         <label for="room_number">Numero Stanza</label>
         <input type="text" class="form-control" name="room_number" value="<?php echo $row['room_number'] ?>">
       </div>
       <div class="form-group">
         <label for="floor">piano</label>
         <input type="text" class="form-control" name='floor' value="<?php echo $row['floor'] ?>">
       </div>
       <div class="form-group">
         <label for="beds">letti</label>
         <input type="text" class="form-control" name='beds' value="<?php echo $row['beds'] ?>">
       </div>
       <div class="form-group">
         <input type="hidden" class="form-control" name='id' value="<?php echo $row['id'] ?>">
       </div>
       <button type="submit" class="btn btn-primary">Salva</button>
     </form>
   </div>
 </div>





<?php

  include __DIR__.'\..\partials\footer.php';

 ?>
