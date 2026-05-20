<?php $page = isset($page) ? $page : ""; ?>

<header>
  <nav>
    <img src="assets/logo.png" width="50" height="50" alt="logo" style="border-radius: 25%">
    <h2 style="color: #ffffff">Chri Systems</h2>
    <div style="margin-left: auto; margin-right: 15px;">
      <a class="menu" <?php if ($page == "index") echo 'style="background: rgba(0,0,0,0.2);"' ?> href="index.php">Home</a>
      <a class="menu" <?php if ($page == "projects") echo 'style="background: rgba(0,0,0,0.2);"' ?> href="projects.php">Progetti</a>
      <a class="menu" <?php if ($page == "gallery") echo 'style="background: rgba(0,0,0,0.2);"' ?> href="gallery.php">Galleria</a>
    </div>
  </nav>
</header>