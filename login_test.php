<?php

$result = null;
$status_code = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $curl = curl_init("http://localhost:4141/api/v1/auth/login");

  $data = json_encode([
    "identifier" => $_POST["identifier"],
    "password" => $_POST["password"]
  ]);

  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  curl_setopt($curl, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
  ]);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $result = curl_exec($curl);
  $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

  curl_close($curl);
}

$reset_form = $status_code == 200;
?>

<!DOCTYPE html>
<html lang="it">

<?php
include 'includes/head.php';
?>

<body>
<main class="center-container">
  <div class="form-card">
    <h1>Login Test</h1>

    <?php if ($result !== null): ?>
      <?php if ($status_code == 200): ?>
        <p class="register-success"><?= htmlspecialchars("Authenticated, the token was generated successfully.") ?></p>
      <?php else: ?>
        <p class="register-error"><?= htmlspecialchars($result) ?></p>
      <?php endif; ?>
    <?php endif; ?>



    <form method="POST">

      <div class="form-group">
        <label>Identifier (Username or Email):</label>
        <label>
          <input type="text" name="identifier" required value="<?= !$reset_form ? htmlspecialchars($_POST["identifier"] ?? "") : "" ?>">
        </label>
      </div>

      <div class="form-group">
        <label>Password:</label>
        <label>
          <input type="password" name="password" required value="">
        </label>
      </div>

      <button type="submit" id="register-button">Test Login</button>
      <p id="loading" hidden>Testing...</p>

    </form>
  </div>

</main>
<script>
    document.querySelector("form").addEventListener("submit", function () {
        const button = document.getElementById("register-button");
        const loading = document.getElementById("loading");

        button.disabled = true;
        button.textContent = "Wait...";
        loading.hidden = false;
    });
</script>
</body>
</html>