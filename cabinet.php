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
  <?php if($_COOKIE['user'] == ''): header('Location: index.php'); ?>
    <?php else: ?>
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
              <a href="index.php" class="nav-link"><?=$_COOKIE['user']?></a>
            </li>
            <li class="nav-item">
              <a href="exit.php" class="nav-link">Log out</a>
            </li>
            <li class="nav-item">
              <a href="https://youtu.be/SeMXa5lBGYc" class="nav-link">Click me</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

        <section
      class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Привет, <span class="text-warning"> <?=$_COOKIE['user']?> </span>.</h1>
            <p class="lead my-4">
            Личный кабинет, Добро пожаловать.
            </p>
            <a href="index.php" class="btn btn-warning mt-3">
                <i class="bi bi-chevron-right"></i> На главную
              </a>
          </div>
          <img class="img-fluid w-50 d-none d-sm-block" src="images/blocknote.jpeg" alt="" style="margin-bottom: 4em;"/>
        </div>
      </div>
    </section>

    <div class="divider"></div>

    <footer class="p-5 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Nyah</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>

  </body>
  <?php endif; ?>