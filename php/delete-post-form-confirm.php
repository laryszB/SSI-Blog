<?php
if (isset($_POST["post-delete-confirm-button"])) {
    $postID = $_POST['postID'];

    $conn = mysqli_connect('localhost', 'root', '', 'blog');

    if($conn->connect_error){
        die('Połączenie nieudane: '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("DELETE FROM post WHERE id = ?");
        $stmt->bind_param("i", $postID);
        $stmt->execute();
        echo "POST ZOSTAŁ USUNIĘTY!<br>";
        echo"<a href = '../index.php'>Powrót</a>";
        $stmt->close();
        $conn->close();
    }
}
?>
