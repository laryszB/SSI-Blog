<div class = "form-registration-container">

    <div class = "form-registration-core">

        <h2>Zarejestruj się</h2>

        <form class = "form-registration" id = "form-registration" method= "post" action="php/registration-form-database.php">

            <div class = "form-registration-control" id = "form-registration-control">
                <label>Nick</label>
                <input id = "nick" name = "nick" type = "text" placeholder= "Kowalski123" required>
            </div>

            <div class = "form-registration-control" id = "form-registration-control">
                <label>Imię</label>
                <input id = "imie" name = "imie" type = "text" placeholder= "Jan" required>
            </div>

            <div class = "form-registration-control" id = "form-registration-control">
                <label>Nazwisko</label>
                <input id = "nazwisko" name = "nazwisko" type = "text" placeholder= "Kowalski" required>
            </div>

            <div class = "form-registration-control" id = "form-registration-control">
                <label>Email</label>
                <input id = "email" name = "email" type = "text" placeholder= "jan.kowalski@gmail.com" required>
            </div>

            <div class = "form-registration-control" id = "form-registration-control">
                <label>Hasło</label>
                <input id = "haslo" name = "haslo" type = "password" placeholder= "wpisz hasło" required>
            </div>

            <button type = "submit" name = "register-submit" >Zarejestruj się</button>

        </form>

    </div>
</div>


