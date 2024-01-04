<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Email and Password Validation</title>
  <!-- CSS -->
  <link rel="stylesheet" href="style.css" />
  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <?
    echo '<header>PC07460 - Lab1 1.3 <br></header>';
    ?>
    <form method="post">
      <?
      if (!empty($user)) {
        echo 'Name: ' . $user['name'];
        echo '<br>';
        echo 'Email: ' . $user['email'];
      }
      ?>
      <div class="field email-field">
        <div class="input-field">
          <input type="email" placeholder="Enter your email" class="email" name="email" />
        </div>
      </div>
      <div class="input-field button">
        <button type="submit" name="submit">Gửi</button>
      </div>
    </form>
  </div>
</body>

</html>