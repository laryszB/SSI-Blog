<?php

if (!isset ($_GET['str']) ) {
    $page = 1;
} else {
    $page = $_GET['str'];
}

$results_per_page = 3;
$number_of_articles = count($articles);
$number_of_pages = intval(ceil($number_of_articles/$results_per_page));
$page_first_result = ($page-1) * $results_per_page;

?>

<div class="pagination-container">

    <h2>Paginacja</h2>

    <div class="pages-container">
        <?php
        for($page=1; $page<=$number_of_pages; $page++ ){
            echo '<a href="index.php?str=' . $page . '">' . $page . ' </a>';
        }
        ?>
    </div>

</div>
