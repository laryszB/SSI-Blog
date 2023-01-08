<link rel = "stylesheet" href = "/css/general.css">
<link rel = "stylesheet" href = "/css/edit-post-form.css">

<?php

session_start();

if(isset($_SESSION['id'])){

    $conn = mysqli_connect('localhost', 'root', '', 'blog');

//            if($conn){
//                echo '<strong>Połączenie udane</strong><br>';
//            }

    $sql = "SELECT id, title, content FROM post where authorID = '{$_SESSION['id']}'";

    $result = mysqli_query($conn, $sql);

    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

//            print_r($posts);

    mysqli_free_result($result);

    mysqli_close($conn);
}
else{
    echo "Brak zalogowanego użytkownika. Zaloguj się i spróbuj ponownie.";
}

?>
<div class = "form-page">


    <?php

    if(isset($_SESSION['id'])){

        foreach($posts as $post){ ?>


            <div class = "form-container">
                <form class = "edit-page-form" id = "edit-page-form" method= "post" action="delete-post-form-confirm.php" onsubmit="return confirm('Czy na pewno chcesz usunąć ten post?');">

                    <div class = "form-control" id = "form-control">
                        <label>ID POSTA</label>
                        <input id = "postID" name = "postID" type = "text" value = "<?php echo htmlspecialchars($post['id']); ?>" readonly="readonly">
                    </div>

                    <div class = "form-control" id = "form-control">
                        <label>TYTUŁ POSTA</label>
                        <input id = "postTitle" name = "postTitle" type = "text" value = "<?php echo htmlspecialchars($post['title']); ?>" readonly="readonly">
                    </div>

                    <div class = "form-control" id = "form-control">
                        <label>TREŚĆ POSTA</label>
                        <textarea id  = "postContent" name = "postContent" rows = "15" cols = "70" readonly="readonly" ><?php echo htmlspecialchars($post['content']); ?></textarea>
                    </div>

                    <button type = "submit" name = "post-delete-confirm-button" >USUŃ</button>

                </form>
            </div>

        <?php } ?>

    <?php } ?>

</div>

<a class="return" href="../index.php">< Powrót</a>
