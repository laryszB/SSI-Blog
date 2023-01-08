<link rel="stylesheet" href="/css/edit-post-form.css">
<link rel="stylesheet" href="/css/edit-post.css">


<?php
if (isset($_POST["post-edit-button"])) {
    $postID = $_POST['postID'];
    $postTitle = $_POST['postTitle'];
    $postContent = $_POST['postContent'];

    $conn = mysqli_connect('localhost', 'root', '', 'blog');

    if($conn->connect_error){
        die('Połączenie nieudane: '.$conn->connect_error);
    }
    else{ ?>

        <h1> DOKONAJ EDYCJI POSTA </h1>
        <div class = "form-page">

                <div class = "form-container">
                    <form class = "edit-page-form" id = "edit-page-form" method= "post" action="edit-post-confirm.php">

                        <div class = "form-control" id = "form-control">
                            <label>ID POSTA</label>
                            <input id = "postID" name = "postID" type = "text" value = "<?php echo htmlspecialchars($postID); ?>" readonly="readonly">
                        </div>

                        <div class = "form-control" id = "form-control">
                            <label>TYTUŁ POSTA</label>
                            <input id = "postTitle" name = "postTitle" type = "text" value = "<?php echo htmlspecialchars($postTitle); ?>">
                        </div>

                        <div class = "form-control" id = "form-control">
                            <label>TREŚĆ POSTA</label>
                            <textarea id  = "postContent" name = "postContent" rows = "15" cols = "70" ><?php echo htmlspecialchars($postContent); ?></textarea>
                        </div>

                        <button type = "submit" name = "post-edit-confirm-button" >Zatwierdź edycję</button>

                    </form>
                </div>
        </div>

        <a class="return" href="edit-post-form.php">< Powrót</a>



    <?php } ?>
    <?php } ?>