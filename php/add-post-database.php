<?php

session_start();

if (isset($_POST["add-post-submit"])) {
    $authorID = $_SESSION["id"];
    $postTitle = $_POST['title'];
    $postContent = $_POST['content'];


    $conn = mysqli_connect('localhost', 'root', '', 'blog');

    if($conn->connect_error){
        die('Połączenie nieudane: '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into post(authorId, title, content) values (?, ?, ?)");
        $stmt->bind_param("iss", $authorID, $postTitle, $postContent);
        $stmt->execute();
        echo "Post został dodany<br>";
        echo"<a href = '../index.php'>Powrót</a>";
        $stmt->close();
        $conn->close();
    }
}
?>
