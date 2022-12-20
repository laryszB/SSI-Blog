<?php

session_start()

?>

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
    <div class = "post-manipulation">
        <a class = "post-action" href = "php/add-post.php">DODAJ POSTA</a>
        <a class = "post-action" href = "php/edit-post.php">EDYTUJ POSTA</a>
        <a class = "post-action" href = "php/remove-post.php">USUŃ POSTA</a>
    </div>

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

    <?php  include "php/registration-form.php" ?>
<!--    <a class = "register" href="php/registration-form.php">ZAREJESTRUJ SIĘ</a>-->

  <!--FORMULARZ REJESTRACJI KONIEC-->

    <!--FORMULARZ LOGOWANIA-->

    <?php  include "php/log-in-form.php" ?>
    <!--    <a class = "register" href="php/registration-form.php">ZAREJESTRUJ SIĘ</a>-->

    <!--FORMULARZ LOGOWANIA KONIEC-->

  <!--FORMULARZ WYLOGOWYWANIA-->

    <?php  include "php/log-out-form.php" ?>
  <!--    <a class = "register" href="php/registration-form.php">ZAREJESTRUJ SIĘ</a>-->

  <!--FORMULARZ WYLOGOWYWANIA KONIEC-->

</div>

  <!--FOOTER-->

  <?php include "php/footer.php" ?>

  <!--FOOTER KONIEC-->

</body>