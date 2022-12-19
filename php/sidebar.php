<div class = "sidebar">
    <ul class = "sidebar-links">
        <li><a href = "#"><i class="fa-solid fa-calendar"></i><p> Kalendarz</p></a></li>
        <li><a href = "#"><i class="fa-solid fa-archway"></i><p> Archiwum</p></a></li>
        <li><a href = "#"><i class="fa-solid fa-filter"></i><p> Kategorie</p></a></li>
        <li><a href = "#"><i class="fa-solid fa-heart"></i><p> Polecane strony</p></a></li>
        <li><a href = "#"><i class="fa-solid fa-key"></i><p> Panel administracyjny</p></a></li>
    </ul>

    <div class = "database-connection">
        <p class = "database-connection-info">


            Status połączenia z bazą danych:<br>



            <!--DATABASE CONNECTION-->

            <?php

            $conn = mysqli_connect('localhost', 'root', '', 'blog');

            if($conn){
                echo '<strong>Połączenie udane</strong><br>';
            }

            $sql = 'SELECT title FROM post';

            $result = mysqli_query($conn, $sql);

            $titles = mysqli_fetch_all($result, MYSQLI_ASSOC);

//            print_r($titles);

            mysqli_free_result($result);

            mysqli_close($conn);

            ?>

            <!--DATABASE CONNECTION KONIEC-->

        </p>
    </div>

</div>
