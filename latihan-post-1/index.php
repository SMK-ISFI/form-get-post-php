<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Method POST</title>
</head>

<body>
  <h1>Sign in</h1>

  <form action="login_proses.php" method="POST">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" />
    </div>

    <div class="form-group">
      <label for="password">Kata Sandi</label>
      <input type="password" name="password" id="password" />
    </div>

    <button type="submit">Sign in</button>
  </form>
</body>

</html>