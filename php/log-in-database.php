<?php
    session_start();

    $conn = mysqli_connect('localhost', 'root', '', 'blog');

    if (isset($_POST['login-nick']) && isset($_POST['login-haslo'])) {

        $loginNick = $_POST['login-nick'];
        $loginHaslo = $_POST['login-haslo'];

        $sql = "SELECT * FROM user WHERE nick='$loginNick' AND passwordHash='$loginHaslo'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if($row['nick'] === $loginNick && $row['passwordHash'] === $loginHaslo){

                $_SESSION['loginNick'] = $row['nick'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['roleId'];
                echo $_SESSION['loginNick'];
                echo $_SESSION['id'];
                echo $_SESSION['role'];
                header("Location: ../index.php");
//                exit();

            }
            else{
                echo "Błędne dane logowania";
            }
        }
        else{
            echo "Błędne dane logowania";
        }







    }
