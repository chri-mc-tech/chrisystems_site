<?php

$result = null;
$status_code = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $curl = curl_init("http://localhost:4141/api/v1/auth/register");

  $data = json_encode([
    "username" => $_POST["username"],
    "email" => $_POST["email"],
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

$reset_form = $status_code == 201;
?>

<!DOCTYPE html>
<html lang="it">

<?php
include 'includes/head.php';
?>

<body>
<main class="center-container">
  <div class="form-card">
    <h1>Register</h1>

    <?php if ($result !== null): ?>
      <?php if ($status_code == 201): ?>
        <p class="register-success"><?= htmlspecialchars($result) ?></p>
      <?php elseif ($status_code == 0): ?>
        <p class="register-warn">ChriSystems servers are offline, please try again later.</p>
      <?php else: ?>
        <p class="register-error"><?= htmlspecialchars($result) ?></p>
      <?php endif; ?>
    <?php endif; ?>
    
    
    
    <form method="POST">

      <div class="form-group">
      <label>Username:</label>
        <label>
          <input type="text" name="username" required value="<?= !$reset_form ? htmlspecialchars($_POST["username"] ?? "") : "" ?>">
        </label>
      </div>

      <div class="form-group">
      <label>Email:</label>
        <label>
          <input type="email" name="email" required value="<?= !$reset_form ? htmlspecialchars($_POST["email"] ?? "") : "" ?>">
        </label>
      </div>

      <div class="form-group">
      <label>Password:</label>
        <label>
          <input type="password" name="password" required value="">
        </label>
      </div>

      <button type="submit" id="register-button">Register</button>
      <p id="loading" hidden>Registration in progress...</p>
  
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