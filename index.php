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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
    <title>Aesthetics</title>
  </head>
  <body>
  <?php if($_COOKIE['user'] == ''): ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">Aesthetic community</a>

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

        <section
      class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Сервис для<span class="text-warning"> Тебя </span></h1>
            <p class="lead my-4">
             Ощутите все прелести регистрации и авторизации. Ощутите все прелести регистрации и авторизации. Ощутите все прелести регистрации и авторизации.
            </p>
            <a href="sign-up.php" class="btn btn-warning mt-3">
                <i class="bi bi-chevron-right"></i> Sign up
              </a>
          </div>
          <img class="img-fluid w-50 d-none d-sm-block" src="images/blocknote.jpeg" alt="" style="margin-bottom: 4em;"/>
        </div>
      </div>
    </section>
    <div class="divider"></div>

    <section id="learn" class="p-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img src="images/abstract.jpeg" class="img-fluid" alt="" />
          </div>
          <div class="col-md p-5">
            <h2>Регистация и авторизация</h2>
            <p class="lead">
              Сам процесс регистрации и авторизации весьма прост и должен быть понятен каждому.
            </p>
            <p>
                Fell in love with a girl
                I fell in love once and almost completely
                She's in love with the world
                But sometimes these feelings can be so misleading
                She turns and says, "Are you alright?"
                I said, "I must be fine 'cause my heart's still beating"
                "Come and kiss me by the riverside, yeah"
                "Bobby says it's fine, he don't consider it cheating now"
            </p>
            <a href="sign-up.php" class="btn btn-warning mt-3">
              <i class="bi bi-chevron-right"></i> Sign up
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="divider"></div>

    <section id="learn" class="p-5 bg-dark text-light">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <h2>Weeb shit.</h2>
            <p class="lead">
              Yeah, this is exactly what you think.
            </p>
            <p>
                I fucking hate everything related to anime, but I can't stop listening to weeb songs.
            </p>
            <a href="https://youtu.be/SeMXa5lBGYc" class="btn btn-warning mt-3">
              <i class="bi bi-chevron-right"></i> Do not click
            </a>
          </div>
          <div class="col-md">
            <img src="images/Caramelldansen-Header.jpeg" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>
    <div class="divider"></div>

    <!-- Questions -->
    <section id="questions" class="p-5">
      <div class="container">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="questions">
          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-one"
              >
                Будет ли приостановлена работа над проектом?
              </button>
            </h2>
            <div
              id="question-one"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Работа над проектом будет приостановлена на время проведения экзаменов.
              </div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-two"
              >
                Когда завершится работа над проектом?
              </button>
            </h2>
            <div
              id="question-two"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Мы планирует завершить работу над проектом до конца 2021 года. 
              </div>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-three"
              >
                Есть ли будущее у этого проекта?
              </button>
            </h2>
            <div
              id="question-three"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Хз, честно.
              </div>
            </div>
          </div>
          
            </div>
          </div>
        </div>
      </div>
    </section>
      
    
    <?php else: ?>
      <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">Aesthetic community</a>

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
              <a href="cabinet.php" class="nav-link"><?=$_COOKIE['user']?></a>
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
            <h1>Сервис для<span class="text-warning"> Тебя </span></h1>
            <p class="lead my-4">
             Для новой регистрации выйдите из своего аккаунта.
            </p>
            <a href="exit.php" class="btn btn-warning mt-3">
                <i class="bi bi-chevron-right"></i> Log out
              </a>
          </div>
          <img class="img-fluid w-50 d-none d-sm-block" src="images/blocknote.jpeg" alt="" style="margin-bottom: 4em;"/>
        </div>
      </div>
    </section>
    <div class="divider"></div>

    <section id="learn" class="p-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img src="images/soldiers.jpeg" class="img-fluid" alt="" />
          </div>
          <div class="col-md p-5">
            <h2>Регистация и авторизация</h2>
            <p class="lead">
              Сам процесс регистрации и авторизации весьма прост и должен быть понятен каждому.
            </p>
            <p>
                Fell in love with a girl
                I fell in love once and almost completely
                She's in love with the world
                But sometimes these feelings can be so misleading
                She turns and says, "Are you alright?"
                I said, "I must be fine 'cause my heart's still beating"
                "Come and kiss me by the riverside, yeah"
                "Bobby says it's fine, he don't consider it cheating now"
            </p>
            <a href="sign-up.php" class="btn btn-warning mt-3">
              <i class="bi bi-chevron-right"></i> Sign up
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="divider"></div>

    <section id="learn" class="p-5 bg-dark text-light">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <h2>Weeb shit.</h2>
            <p class="lead">
              Yeah, this is exactly what you think.
            </p>
            <p>
                I fucking hate everything related to anime, but I can't stop listening to weeb songs.
            </p>
            <a href="https://youtu.be/SeMXa5lBGYc" class="btn btn-warning mt-3">
              <i class="bi bi-chevron-right"></i> Do not click
            </a>
          </div>
          <div class="col-md">
            <img src="images/Caramelldansen-Header.jpeg" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>
    <div class="divider"></div>

    <!-- Questions -->
    <section id="questions" class="p-5">
      <div class="container">
        <h2 class="text-center mb-4">Frequently Asked Questions</h2>
        <div class="accordion accordion-flush" id="questions">
          <!-- Item 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-one"
              >
                Будет ли приостановлена работа над проектом?
              </button>
            </h2>
            <div
              id="question-one"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Работа над проектом будет приостановлена на время проведения экзаменов.
              </div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-two"
              >
                Когда завершится работа над проектом?
              </button>
            </h2>
            <div
              id="question-two"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Мы планирует завершить работу над проектом до конца 2021 года. 
              </div>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#question-three"
              >
                Есть ли будущее у этого проекта?
              </button>
            </h2>
            <div
              id="question-three"
              class="accordion-collapse collapse"
              data-bs-parent="#questions"
            >
              <div class="accordion-body">
                Хз, честно.
              </div>
            </div>
          </div>
          
            </div>
          </div>
        </div>
      </div>
    </section>
      <?php endif; ?>

      
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
</html>