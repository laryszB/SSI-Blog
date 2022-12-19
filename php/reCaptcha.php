<?php

    if (isset($_POST["comment-submit"])){

        $nick = $_POST["nick"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];

        $secretKey = "6LfKYBUjAAAAAAOw6jNOHrNxrXsqefVAf0lkkXBa";
        $responseKey = $_POST["g-recaptcha-response"];
        $userIP = $_SERVER["REMOTE_ADDR"];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
        $response = file_get_contents($url);

        echo $response;

    }


