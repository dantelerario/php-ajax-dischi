<main>
  <div class="container">
    <?php
    include_once __DIR__ . '/../data/data.php';
    foreach ($albums as $album) { ?>
          <div class="box">
            <img src="https://i.pinimg.com/474x/36/1f/f0/361ff052f89dd2b7c4aed9518d0fb3bb.jpg" alt="img">
            <p class="title"><?php echo $album['title']; ?></p>
            <p class="artist"><?php echo $album['artist']; ?></p>
            <p class="genre"><?php echo $album['genre']; ?></p>
          </div>
    <?php } ?>
  </div>
</main>
