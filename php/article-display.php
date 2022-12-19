<?php


            $conn = mysqli_connect('localhost', 'root', '', 'blog');

//            if($conn){
//                echo '<strong>Połączenie udane</strong><br>';
//            }

            $sql = 'SELECT title, content FROM post';

            $result = mysqli_query($conn, $sql);

            $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

//            print_r($posts);

            mysqli_free_result($result);

            mysqli_close($conn);

            ?>



<?php foreach($posts as $post){ ?>
      <div class = 'post'>

        <div class = 'post-title-div'>
            <p class = 'post-title-p'>
                <?php echo htmlspecialchars($post['title']); ?>
            </p>
        </div>

        <div class = 'post-text-div'>
            <p class = 'post-text-p'>
                <?php echo htmlspecialchars($post['content']); ?>
            </p>
        </div>

    </div>
<?php } ?>


