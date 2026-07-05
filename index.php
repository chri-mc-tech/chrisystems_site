<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">

  <title>ChriSystems</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico">

  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>

<?php
$page = "index";
include 'includes/header.php';
?>

<div class="site">
  <h1 style="color: #ffffff; padding-top: 50px; padding-bottom: 20px">Benvenuto su ChriSystems</h1>

  <div class="box" style="margin: 3%; width: 70%; justify-items: center;">
    <p style="margin: 0; font-size: 22px; text-align: center">
        ChriSystems è un team di sviluppo software dedicato alla creazione di progetti tecnologici e sperimentali. <br>
        Lavoriamo con diverse tecnologie per esplorare, imparare e trasformare idee in applicazioni concrete. <br>
        Il progetto nasce dalla passione per la programmazione, i sistemi e lo sviluppo software. <br>
        Qui condividiamo i nostri progetti, gli esperimenti e il nostro percorso di crescita.
    </p>
  </div>

  <div style="display: flex; flex-wrap: wrap; padding-top: 50px; width: 90%; justify-content: center; gap: 30px">
    <div style="width: 45%; min-width: 350px;">
      <h1 style="color: #ffffff; padding-top: 10px; padding-bottom: 10px;">Tecnologie che utilizziamo</h1>
      <div class="box">
        <span class="mini_title">Programmazione e Web:</span> <br>
        <span class="tag">Python</span>
        <span class="tag">C++</span>
        <span class="tag">Java</span>
        <span class="tag">HTML</span>
        <span class="tag">CSS</span> <br> <br>

        <span class="mini_title">Strumenti:</span> <br>
        <span class="tag">Git</span>
        <span class="tag">GitHub</span>
        <span class="tag">CLion (IDE)</span>
        <span class="tag">IntelliJ IDEA (IDE)</span>
        <span class="tag">PhpStorm (IDE)</span> <br> <br>

        <span class="mini_title">Sistemi:</span> <br>
        <span class="tag">Linux</span>
      </div>
    </div>

    <div style="width: 45%; min-width: 350px;">
      <h1 style="color: #ffffff; padding-top: 10px; padding-bottom: 10px">Le nostre competenze</h1>
      <div class="box">
        <span class="mini_title">Networking:</span> <br>
        <span class="tag">IP</span>
        <span class="tag">DNS</span>
        <span class="tag">HTTP/HTTPS</span>
        <span class="tag">TCP/UDP</span> <br> <br>

        <span class="mini_title">Sistemi:</span> <br>
        <span class="tag">Linux internals</span>
        <span class="tag">File system</span>
        <span class="tag">Terminale e shell</span> <br> <br>

        <span class="mini_title">Sicurezza:</span> <br>
        <span class="tag">Firewall</span>
        <span class="tag">Sicurezza di rete</span> <br> <br>

        <span class="mini_title">Informatica generale:</span> <br>
        <span class="tag">Architettura dei computer</span>
        <span class="tag">Funzionamento CPU/RAM</span>
        <span class="tag">Binario/esadecimale</span>
        <span class="tag">Algoritmi base</span>

      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
