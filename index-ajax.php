<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php-ajax-dischi - Dante L'Erario</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" type='text/css'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
      <!-- HEADER -->
      <?php
      include_once __DIR__ . '/partial/header.php'
      ?>
      <!-- MAIN -->
      <main>
        <select class="album_filter" name="album_filter">
          <option value="all">All</option>
          <option value="heavy">Heavy Metal</option>
          <option value="rock">Rock</option>
          <option value="rap">Rap</option>
        </select>
        <div class="container">

        </div>
      </main>

      <!-- HANDLEBARS -->
      <script id="template" type="text/x-handlebars-template">
        <div class="box">
          <img src="{{img}}" alt="img">
          <p class="title">{{title}}</p>
          <p class="artist">{{artist}}</p>
          <p class="genre">{{genre}}</p>
        </div>
      </script>
      <!-- JS -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js'></script>
      <script src="js/main.js"></script>
</body>
</html>
