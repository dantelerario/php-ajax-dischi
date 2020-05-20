<main>
  <div class="container">
    <?php
    include_once __DIR__ . '/../data/data.php';
    foreach ($albums as $album) { ?>
          <div class="box">
            <img src="<?php echo $album['img']; ?>" alt="img">
            <p class="title"><?php echo $album['title']; ?></p>
            <p class="artist"><?php echo $album['artist']; ?></p>
            <p class="genre"><?php echo $album['genre']; ?></p>
          </div>
    <?php } ?>
  </div>
</main>
