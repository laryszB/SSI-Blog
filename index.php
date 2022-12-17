<!DOCTYPE html>

<head>
    <html lang="pl"></html>
    <title>Blog Błażeja</title>
    <script src="https://kit.fontawesome.com/5a159a8524.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "css/general.css">
    <link rel = "stylesheet" href = "css/form.css">
    <link rel = "stylesheet" href = "css/sidebar.css">
    <link rel = "stylesheet" href = "css/form-registration.css">
</head>

<body>

<!--HEADER-->

<?php include "php/header.php"?>

<!--HEADER KONIEC-->

<!--SIDEBAR-->

<?php include "php/sidebar.php"?>

<!--SIDEBAR KONIEC-->



<!--ZDEFINIOWANIE ARTYKUŁÓW-->

<?php include "php/article-creation.php"?>

<!--ZDEFINIOWANIE ARTYKUŁÓW KONIEC-->

<div class = "post-space">

  <!--WYŚWIETLANIE ARTYKUŁÓW-->

  <?php include "php/article-display.php"?>

  <!--WYŚWIETLANIE ARTYKUŁÓW KONIEC-->


      <!--FORMULARZ-KOMENTARZ-->

  <?php include 'php/reCaptcha.php';?>

  <?php include 'php/comment-form.php';?>

      <!--FORMULARZ-KOMENTARZ KONIEC-->


      <!--PAGINACJA-->

  <?php include "php/pagination.php" ?>

      <!--PAGINACJA KONIEC-->

</div>



<div class = "o-mnie-container">

  <!--FORMULARZ REJESTRACJI-->

    <?php include "php/registration-form.php" ?>

  <!--FORMULARZ REJESTRACJI KONIEC-->

  <div class = "o-mnie-text">

    <p class = "o-mnie-text-title">
      O MNIE
    </p>

    <p class = "o-mnie-text-p">
      Tutaj zawarte są informacje o mnie:
      Stan cywilny: zaręczony.
    </p>
  </div>

</div>

  <!--FOOTER-->

  <?php include "php/footer.php" ?>

  <!--FOOTER KONIEC-->

</body>