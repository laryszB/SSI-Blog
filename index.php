<!DOCTYPE html>

<head>
    <html lang="pl"></html>
    <title>Blog Błażeja</title>
    <script src="https://kit.fontawesome.com/5a159a8524.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href = "css/general.css">
    <link rel = "stylesheet" href = "css/form.css">
    <link rel = "stylesheet" href = "css/sidebar.css">
</head>

<body>

<div class = "header">

    <div class = "header-img">
        <img class = "flaga-img" src = "img/flaga.png" alt = "Flaga Polski">
        <img class = "prezes-img" src = "img/prezes2.png" alt = "Prezes Polski">
    </div>

    <div class = "header-text">
        <h1 class = "top-header-text">Witam na moim blogu, pozdrawiam</h1>
        <p class = "bottom-header-text">Blog będzie poświęcony sprawom Polski</p>
    </div>

</div>



<div class = "sidebar">
    <ul class = "sidebar-links">
        <li><a href = "#"><i class="fa-solid fa-calendar"></i><p> Kalendarz</p></a></li>
        <li><a href = "#"><i class="fa-solid fa-archway"></i><p> Archiwum</p></a></li>
        <li><a href = "#"><i class="fa-solid fa-filter"></i><p> Kategorie</p></a></li>
        <li><a href = "#"><i class="fa-solid fa-heart"></i><p> Polecane strony</p></a></li>
        <li><a href = "#"><i class="fa-solid fa-key"></i><p> Panel administracyjny</p></a></li>
    </ul>

</div>

<!--Zdefiniowanie artykułów-->
<?php

class Article {

    public $title;
    public $content;

    function setTitle($title) {
        $this->title = $title;
    }

    function getTitle() {
        return $this->title;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function getContent() {
        return $this->content;
    }
}

$content1 = "Pośrednik między Bogiem a ludźmi, arcykapłan wielki, który przeniknął niebiosa, Jezus, Syn Boży, z chwilą gdy podjął dzieło miłosierdzia, którym rodzaj ludzki obsypał dobrodziejstwami nadprzyrodzonymi, zamierzał niewątpliwie naprawić stosunek między stworzeniem a Stwórcą zakłócony przez grzech i przyprowadzić nieszczęśliwe potomstwo Adama, skażone zmazą pierworodną, z powrotem do Ojca Niebieskiego, praźródła i celu ostatecznego wszystkich rzeczy.";
$content2 = "Przeto podczas swego pobytu na ziemi nie tylko ogłosił On początek Odkupienia i zwiastował przyjście Królestwa Bożego, lecz przez nieustanną modlitwę i poświęcenie swojej osoby zabiegał o zbawienie dusz, a w końcu, wisząc na krzyżu, ofiarował Bogu samego siebie niepokalanego, by oczyścić sumienia nasze od uczynków martwych dla służenia Bogu żyjącemu";
$content3 = "W ten sposób wszyscy ludzie zostali szczęśliwie zawróceni z smutnej drogi, która wiodła ich ku zgubie i zagładzie, a na nowo skierowani zostali do Boga, aby współpracując w osiągnięciu własnej świętości, której źródłem jest krew Baranka Niewinnego, oddawali chwałę należną Bogu.";
$content4 = "Atoli niebieski Odkupiciel pragnął, by życie kapłańskie, które w śmiertelnym ciele rozpoczął przez swoje modlitwy i swą ofiarę, przetrwało również przez wieki w Ciele Jego Mistycznym, którym jest Kościół. Dlatego ustanowił widzialne kapłaństwo, by na wszelkim miejscu była składana ofiara czysta, w tym celu, by wszyscy ludzie tak ze Wschodu jak i Zachodu, z grzechu uwolnieni z posłuszeństwa nakazom swego sumienia, dobrowolnie i chętnie służyli Bogu.";
$content5 = "Przeto Kościół, wierny i posłuszny poleceniu swego założyciela, sprawuje urząd kapłański przede wszystkim poprzez liturgię. Na pierwszym miejscu czyni to przy ołtarzu, gdzie się ofiara Krzyża nieustannie przedstawia i odnawia z różnicą jedynie w sposobie ofiarowania. Następnie czyni to przez Sakramenta, które są szczególnymi środkami, dającymi ludziom udział w życiu nadprzyrodzonym. Wreszcie pełni ten swój urząd przez hymn pochwalny, który codziennie śpiewa Bogu Najwyższemu.";

$title1 = "Mediator Dei";
$title2 = "Mediator Dei 2";
$title3 = "Mediator Dei 3";
$title4 = "Mediator Dei 4";
$title5 = "Mediator Dei 5";

$article1 = new Article();
$article1->setTitle($title1);
$article1->setContent($content1);

$article2 = new Article();
$article2->setTitle($title2);
$article2->setContent($content2);

$article3 = new Article();
$article3->setTitle($title3);
$article3->setContent($content3);

$article4 = new Article();
$article4->setTitle($title4);
$article4->setContent($content4);

$article5 = new Article();
$article5->setTitle($title5);
$article5->setContent($content5);

$articles = array($article1, $article2, $article3, $article4, $article5);

?>

<div class = "post-space">

<!--Wyświetlanie artykułów-->
    <?php

    foreach($articles as $value){
        echo "  <div class = 'post'>
        <div class = 'post-title-div'>
            <p class = 'post-title-p'>
                $value->title
            </p>
        </div>

        <div class = 'post-text-div'>
            <p class = 'post-text-p'>
                $value->content
            </p>

        </div>
    </div>";
    }

?>

    <!--FORMULARZ-->

<?php include 'php/reCaptcha.php';?>
<script defer src = "js/form-validation.js" ></script>

<div class = "form-container">

    <div class = "form-core">

        <h2>Zostaw komentarz</h2>

            <form class = "form" id = "form" method= "post" action="http://www.tomaszx.pl/materialy/test_przesylania.php">

                <div class = "form-control" id = "form-control">
                    <label>Nick</label>
                    <input id = "nick" name = "nick" type = "text" placeholder= "Blazej123">
                    <small>Błąd</small>
                </div>

                <div class = "form-control" id = "form-control">
                    <label>Email</label>
                    <input id = "email" name = "email" type = "text" placeholder= "blazej.larysz@gmail.com">
                    <small>Błąd</small>
                </div>

                <div class = "form-control" id = "form-control">
                    <label>Komentarz</label>
                    <textarea id  = "comment" name = "comment" rows = "5" cols = "50" placeholder = ":)"></textarea>
                    <small>Błąd</small>
                </div>

                <!-- reCaptcha Google v2 -->

                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <div class="g-recaptcha" data-sitekey="6LfKYBUjAAAAAPdEDZ-bFhLKLwKc4MZsLiYR9Tg5"></div>

                <!-- reCaptcha Google v2 koniec -->

                <button type = "submit" name = "submit" >Wyślij</button>

            </form>



    </div>

</div>





    <!--FORMULARZ KONIEC-->



    <!--PAGINACJA-->

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

    <!--PAGINACJA KONIEC-->



<div class = "o-mnie-container">
    <div class = "o-mnie-text">

        <p class = "o-mnie-text-title">
            O MNIE
        </p>

        <p class = "o-mnie-text-p">
            Tutaj zawarte są informacje o mnie:
            Stan cywilny: zaręczony.
        </p>
    </div>
</div>

<div class = "footer">
    <p>2022 Błażej Larysz</p>
</div>

</body>