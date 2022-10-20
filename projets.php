<?php $page = "projets"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alexis Mourey</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/projects.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
  <main>

    <!-- DEBUT LEFTBOX -->
<?php include "includes/leftbox.php"; ?>

    <!-- FIN LEFTBOX -->

    <!-- DEBUT CONTENT -->
    <div class="main-content">

      <!-- DEBUT NAVBAR -->
<?php include "includes/navbar.php"; ?>

      <!-- FIN NAVBAR -->

      <!-- DEBUT ARTICLE PAGE -->
      <article>

        <header>
          <h2 class="h2 article-title">Projets</h2>
        </header>


        <section class="projects">

          <ul class="filter-list">
            <li class="filter-item">
              <button class="active" data-filter-btn="">Tous</button>
            </li>
            <li class="filter-item">
              <button data-filter-btn="">Web</button>
            </li>
            <li class="filter-item">
              <button data-filter-btn="">Modules</button>
            </li>
          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select="">
              <div class="select-value" data-select-value="">Tous</div>
              <div class="select-icon">
                <i class="fa-solid fa-chevron-down"></i>
              </div>
            </button>

            <ul class="select-list">
              <li class="select-item">
                <button data-select-item="">Tous</button>
              </li>
              <li class="select-item">
                <button data-select-item="">Web</button>
              </li>
              <li class="select-item">
                <button data-select-item="">Modules</button>
              </li>
            </ul>
          </div>

          <ul class="project-list">

          <li class="project-item active" data-filter-item="" data-category="web">
              <a href="projet/ip-calculator.php">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <i class="fa-regular fa-eye"></i>
                  </div>
                  <img src="assets/images/project-ipcalculator.png" alt="IP Calculator" loading="lazy">
                </figure>
                <h3 class="project-title">IP Calculator</h3>
                <p class="project-category">Web</p>
              </a>
            </li>

            <li class="project-item active" data-filter-item="" data-category="modules">
              <a href="#">
                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <i class="fa-regular fa-eye"></i>
                  </div>
                  <img src="assets/images/project-discordcanvas.png" alt="Discord Canvas" loading="lazy">
                </figure>
                <h3 class="project-title">Discord Canvas</h3>
                <p class="project-category">Modules</p>
              </a>
            </li>

          </ul>

        </section>

      </article>
      <!-- FIN ARTICLE PAGE -->


    </div>
    <!-- FIN CONTENT -->

  </main>

  <!-- DEBUT FOOTER -->
<?php include "includes/footer.php"; ?>

  <!-- FIN FOOTER -->

  <!-- DEBUT SCRIPTS -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/projects.js"></script>
  <!-- FIN SCRIPTS -->
</body>
</html>