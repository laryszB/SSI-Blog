<link rel = "stylesheet" href = "/css/general.css">
<link rel = "stylesheet" href = "/css/edit-post.css">


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



<?php

if(isset($_SESSION['id'])){

foreach($posts as $post){ ?>
    <div class = 'post'>

        <div class = 'post-title-div'>

          <p class = 'post-title-authorID'>
              <?php echo htmlspecialchars($post['id']); ?>
          </p>

          <p class = 'post-title-p'>
              <?php echo htmlspecialchars($post['title']); ?>
          </p>

        </div>

        <div class = 'post-text-div'>
            <p class = 'post-text-p'>
                <?php echo htmlspecialchars($post['content']); ?>
            </p>

        </div>
        <a class = "edit-post-link" href = "edit-page.php">EDYTUJ TEN POST</a>

    </div>
<?php } ?>

<?php } ?>

