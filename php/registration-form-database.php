<?php
if (isset($_POST["submit"])) {
    $roleID = 1;
    $nick = $_POST['nick'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    $conn = mysqli_connect('localhost', 'root', '', 'blog');

    if($conn->connect_error){
        die('Połączenie nieudane: '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into user(roleid, nick, firstName, lastName, email, passwordHash) values (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss", $roleID, $nick, $imie, $nazwisko, $email, $haslo );
        $stmt->execute();
        echo "Rejestracja udana<br>";
        echo"<a href = '../index.php'>Powrót</a>";
        $stmt->close();
        $conn->close();
    }
}
?>
