<?php $page = "projets"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alexis Mourey</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/projects.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
  <main>

    <!-- DEBUT LEFTBOX -->
<?php include "../includes/leftbox.php"; ?>

    <!-- FIN LEFTBOX -->

    <!-- DEBUT CONTENT -->
    <div class="main-content">

      <!-- DEBUT NAVBAR -->
<?php include "../includes/navbar.php"; ?>

      <!-- FIN NAVBAR -->

      <!-- DEBUT ARTICLE PAGE -->
      <article>

        <header>
          <h2 class="h2 article-title subtitle"><a href="/projets.php">Projets</a> <span>/ IP Calculator</span></h2>
        </header>


        <section class="project-text">
          <p>
            Ce calculateur est un outil pédagogique pour le calcul d'adresse IPv4 reprenant l'outil Excel de Stéphane Menoud, mais cette fois sur le Web.
          </p>
          <h1>
            <a class="link-project" href="/ip-calculator"><i class="fa-solid fa-arrow-right"></i> Accéder à la version en ligne</a>
          </h1>
          <h1 class="h1-link-project">
            <a class="link-project" href="https://github.com/xixi52/IPCalculator"><i class="fa-solid fa-arrow-right"></i> Accéder au code source</a>
          </h1>
          <img class="img-example" src="/assets/images/project-ipcalculator.png" alt="IP Calculator" loading="lazy">
          <p>
            🍻 Un grand merci à Stéphane Menoud pour cet outil et à Frédéric Leroux pour son enseignement et son partage!
          </p>
        </section>

      </article>
      <!-- FIN ARTICLE PAGE -->


    </div>
    <!-- FIN CONTENT -->

  </main>

  <!-- DEBUT FOOTER -->
<?php include "../includes/footer.php"; ?>

  <!-- FIN FOOTER -->

  <!-- DEBUT SCRIPTS -->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/script.js"></script>
  <!-- FIN SCRIPTS -->
</body>
</html>