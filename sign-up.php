<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Sign up</title>
  </head>
  <body> -->
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Aesthetics</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="index.php" class="navbar-brand">Aesthetic community</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="sign-up.php" class="nav-link">Sign up</a>
            </li>
            <li class="nav-item">
              <a href="log-in.php" class="nav-link">Log in</a>
            </li>
            <li class="nav-item">
              <a href="https://youtu.be/SeMXa5lBGYc" class="nav-link">Click me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- sds -->
    <?php if($_COOKIE['user'] == ''): ?>
    <div class="container mt-4">
      <div class="row">
            <div class="col">
              <h1>Sign up</h1>
              <form action="check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Login"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name"><br>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password"><br>
                <button type="submit" class="btn btn-warning">Register</button>
              </form>
            </div>
    </div>
    <?php else: ?>
        <?php header('Location: /cabinet.php'); ?>
      <?php endif; ?>
</div>


  </body>
</html>