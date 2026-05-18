<header>
  <nav>
    <img src="assets/logo.png" width="40" height="40" alt="logo" style="border-radius: 25%">
    <h2 style="color: #ffffff">Chri Systems</h2>
    <div style="margin-left: auto; margin-right: 15px;">
      <a class="menu" <?php echo isset($home) ? $home : ""; ?> href="index.php">Home</a>
      <a class="menu" <?php echo isset($projects) ? $projects : ""; ?> href="projects.php">Progetti</a>
      <a class="menu" <?php echo isset($gallery) ? $gallery : ""; ?> href="gallery.php">Galleria</a>
    </div>
  </nav>
</header>