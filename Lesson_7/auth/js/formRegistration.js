class FormValidation {
    constructor(){
        this.submit =  document.querySelector('#submit');
        this.setEventListener();
    }
    setEventListener(){
        let self = this;

        self.submit.addEventListener("click", function(event) {
            
            let inputName = document.getElementById('name');
            let inputLogin = document.getElementById('login');
            let inputPass = document.getElementById('pass');
            let inputEmail = document.getElementById('email');

            if (!self.updateElementValidation(inputEmail, /^[a-z]+[.|\-|a-z]{1}[a-z]{0,}[@]{1}[[a-z|\d]+[.]{1}[a-z]{2,3}$/.test(inputEmail.value))){
                $('#dialog').html("Неодходимо корректно заполнить обязательное поле 'E-mail'!");
            }
            if (!self.updateElementValidation(inputPass, /^(?=.*[0-9])(?=.*[a-zA-Z])[0-9a-zA-Z!@#$%^&*]{5,}$/.test(inputPass.value))) {
                $('#dialog').html("Неодходимо корректно заполнить обязательное поле 'Пароль'! Оно должно обязательно содержать буквы и цифры.");
            }
            if (!self.updateElementValidation(inputLogin, /^[0-9a-zа-яё]+$/i.test(inputLogin.value))) {
                $('#dialog').html("Неодходимо корректно заполнить обязательное поле 'Логин'!");
            }
            if (!self.updateElementValidation(inputName, /^[a-zа-яё]+$/i.test(inputName.value))) {
                $('#dialog').html("Неодходимо корректно заполнить обязательное поле 'Логин'!");
            }
            
            self.checkSendMessage();
        });
    }
    updateElementValidation(input, validationResult) {
        if (validationResult) {
            input.removeAttribute('class');
            input.setAttribute('class', 'form-control');
            return true;
        } else {
            input.setAttribute('class', input.className + ' error');
            $(input).effect('shake');
            return false;
        };       
    }
    checkSendMessage(){
        if (document.querySelector('.error')) {
            event.preventDefault();
            this.displayMessage();
        }
    }
    displayMessage(){
        $('#dialog').dialog({
            width: 400,
            height: 220,
            modal: true,
            autoOpen: false,
            buttons: {
                OK: function(){
                    $(this).dialog('close');
                }
            }
        });
        $('#dialog').dialog('open');
    }
}

let formValidation = new FormValidation();



