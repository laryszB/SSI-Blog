<?php


if(isset($_POST['log-out-submit'])) {

    session_start();
    session_destroy();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
