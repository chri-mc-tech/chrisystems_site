<!DOCTYPE html>
<html lang="it">

<?php
include 'includes/head.php';
?>

<body>

<?php
$page = "index";
include 'includes/header.php';
?>

<div class="site">
    <h1 style="color: #ffffff; padding-top: 50px; padding-bottom: 20px; text-align: center;">Benvenuto su ChriSystems</h1>

  <div class="box" style="margin: 3%; width: 70%; justify-items: center;">
    <p style="margin: 0; font-size: 22px; text-align: center">
        Ho creato ChriSystems per avere uno spazio dove sperimentare nuove idee e imparare.
        Impariamo sia testando le nostre intuizioni, sia analizzando le tecnologie esistenti per capire come funzionano davvero,
        mettendo poi insieme tutto quello che abbiamo scoperto, puntiamo a tirare fuori qualcosa di nuovo <br> <br>

        L'obiettivo non è guadagnare o vendere dati come le grandi aziende, ma creare progetti e farli provare per ricevere feedback.
        Quello che ci importa è imparare e, in futuro, riuscire a fare qualcosa di concreto e utile, magari insegnando ciò che abbiamo scoperto.
        Non ci interessano i tuoi dati, non ci interessa il profitto. <br> <br>

        Se hai voglia di provare i nostri progetti, di darci un parere sincero o di aiutarci a capire cosa non funziona, allora sei nel posto giusto.
        Siamo qui per costruire insieme qualcosa di concreto
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

<div style="height: 50px"></div>

<?php include 'includes/footer.php'; ?>

</body>
</html>
