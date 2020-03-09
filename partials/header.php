<?php
include __DIR__.'/../env.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo $basepath ?>/dist/app.css">
  <title>Document</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-dark">
      <div class="navbar-brand">Hotel Bool</div>
      <ul class="navbar-nav">
        <li><a href="<?php echo $basepath ?>">Tutte le stanze</a></li>
        <li><a href="<?php echo $basepath ?>/insert/insert.php">Crea stanza</a></li>
      </ul>
    </nav>
  </header>
  <div class="wrapper">
