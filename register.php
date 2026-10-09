<?php

use Dotenv\Dotenv;
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$beta_code = $_ENV["BETA_CODE"];

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
      <?php else: ?>
        <p class="register-error"><?= htmlspecialchars($result) ?></p>
      <?php endif; ?>
    <?php endif; ?>
    
    
    
    <form method="POST">

      <div class="form-group">
      <label>Username:</label>
        <label>
          <input type="text" name="username" required>
        </label>
      </div>

      <div class="form-group">
      <label>Email:</label>
        <label>
          <input type="email" name="email" required>
        </label>
      </div>

      <div class="form-group">
      <label>Password:</label>
        <label>
          <input type="password" name="password" required>
        </label>
      </div>

      <button type="submit">Register</button>
  
    </form>
  </div>

</main>

</body>
</html>