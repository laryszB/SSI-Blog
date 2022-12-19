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

            <button type = "submit" name = "comment-submit" >Wyślij</button>

        </form>



    </div>

</div>
