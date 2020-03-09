<?php
  include __DIR__.'\..\partials\header.php';
  include_once __DIR__.'\..\env.php';
  include __DIR__.'\..\database.php';


 ?>

 <div class="container">
   <div class="col-12">
     <form action= "<?php echo $basepath ?>/insert/server.php" method="post">
       <div class="form-group">
         <label for="room_number">Numero Stanza</label>
         <input type="text" class="form-control" name="room_number" value="" placeholder="inserisci numero stanza">
       </div>
       <div class="form-group">
         <label for="floor">piano</label>
         <input type="text" class="form-control" name='floor' value="" placeholder="inserisci numero piano">
       </div>
       <div class="form-group">
         <label for="beds">letti</label>
         <input type="text" class="form-control" name='beds' value="" placeholder="inserisci numero letti">
       </div>
       <button type="submit" class="btn btn-primary">Crea</button>
     </form>
   </div>
 </div>





<?php

  include __DIR__.'\..\partials\footer.php';

 ?>
