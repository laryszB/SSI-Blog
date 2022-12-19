<link rel = "stylesheet" href = "/css/form-log-in.css">


<div class = "form-log-in-container">

    <div class = "form-log-in-core">

        <h2>Zaloguj się</h2>

        <form class = "form-log-in" id = "form-log-in" method= "post" action="php/log-in-database.php">

            <div class = "form-registration-control" id = "form-registration-control">
                <label>Nick</label>
                <input id = "nick" name = "login-nick" type = "text" placeholder= "Kowalski123">
            </div>

            <div class = "form-log-in-control" id = "form-log-in-control">
                <label>Hasło</label>
                <input id = "haslo" name = "login-haslo" type = "password" placeholder= "wpisz hasło">
            </div>

            <button type = "submit" name = "login-submit" >Zaloguj się</button>

        </form>

    </div>
</div>