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
    <header>
      <h1>php-ajax-dischi</h1>
    </header>
    <main>
      <?php
      include_once __DIR__ . '/data/data.php';

      foreach ($albums as $album) { ?>
        <p><?php echo $album['artist']; ?></p>
        <p><?php echo $album['title']; ?></p>
        <p><?php echo $album['genre']; ?></p>
      <?php } ?>

    </main>





    <!-- JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js'></script>
    <script src="js/main.js"></script>
</body>
</html>
