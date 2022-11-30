const form = document.getElementById('form')
const nick = document.getElementById('nick')
const email = document.getElementById('email')
const comment = document.getElementById('comment')

form.addEventListener('submit', (e) => {

    checkInputs();

    function checkInputs(){

        const nickValue = nick.value
        const emailValue = email.value
        const commentValue = comment.value

        if (nickValue === ''){
            e.preventDefault();
            setErrorFor(nick, "Pole nick nie może być puste");

        } else {
            setSuccesFor(nick)
        }

        if (emailValue === ''){
            e.preventDefault();
            setErrorFor(email, "Pole email nie może być puste");

        } else if(!isEmail(emailValue)){
            e.preventDefault();
            setErrorFor(email, "Nieprawidłowy adres email");
        } else {
            setSuccesFor(email);
        }

        if (commentValue === ''){
            e.preventDefault();
            setErrorFor(comment, "Pole komentarz nie może być puste");

        } else {
            setSuccesFor(comment);
        }

    }



    function setErrorFor(input, message){

        const formControl = input.parentElement;
        const small = formControl.querySelector('small');

        small.innerText = message;

        formControl.className = 'form-control error';

    }

    function setSuccesFor(input) {

        const formControl = input.parentElement;
        formControl.className = 'form-control success';
    }

    function isEmail(email){
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }
});


