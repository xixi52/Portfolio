<?php $page = "contact"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alexis Mourey</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/contact.css">
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
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="google-map">
          <figure>
            <iframe
              src="https://maps.google.com/maps?q=51000%20Ch%C3%A2lons-en-Champagne,%20France&t=&z=12&ie=UTF8&iwloc=&output=embed"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
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
  <!-- FIN SCRIPTS -->
</body>
</html>