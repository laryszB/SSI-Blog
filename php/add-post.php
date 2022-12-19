<?php

        session_start();
?>

<link rel = "stylesheet" href = "/css/add-post.css">

<div class="add-post-container">

    <form class = "add-post-form" id = "add-post-form" method= "post" action="add-post.php">

        <h2>DODAJ POSTA</h2>

        <div class = "add-post-form-control" id = "add-post-form-control">
            <label>Dodajesz post jako: <?php echo $_SESSION['loginNick']?></label>
        </div>

        <div class = "add-post-form-control" id = "add-post-form-control">
            <label>Tytuł posta</label>
            <textarea id  = "add-post-title" name = "title" rows = "1" cols = "30" maxlength="75"></textarea>
        </div>

        <div class = "add-post-form-control" id = "add-post-form-control">
            <label>Treść posta</label>
            <textarea id  = "add-post-content" name = "content" rows = "30" cols = "100" maxlength="500"></textarea>
        </div>

        <button type = "submit" name = "submit" >Dodaj posta</button>

    </form>

</div>