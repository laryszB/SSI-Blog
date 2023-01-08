<?php
if (isset($_POST["post-edit-confirm-button"])) {
    $postID = $_POST['postID'];
    $postTitle = $_POST['postTitle'];
    $postContent = $_POST['postContent'];

    $conn = mysqli_connect('localhost', 'root', '', 'blog');

    if($conn->connect_error){
        die('Połączenie nieudane: '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("UPDATE post SET title = ?, content = ? WHERE id = ?");
        $stmt->bind_param("ssi", $postTitle, $postContent, $postID);
        $stmt->execute();
        echo "Edycja udana<br>";
        echo"<a href = '../index.php'>Powrót</a>";
        $stmt->close();
        $conn->close();
    }
}
?>