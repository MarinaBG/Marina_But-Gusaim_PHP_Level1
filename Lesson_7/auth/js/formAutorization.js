class FormAuthorization {
    constructor(){
        this.submit =  document.querySelector('#submit');
        this.setEventListener();
    }
    request(url, data) {
        $.ajax({
            method: "POST",
            url: url,
            data: data,
            context: this,
            error: function (request, status, error) {
                console.log(error);
            },
        }).done(function(response) {
            if (response == "0") {
                $('#dialog').html("Неверные логин и пароль!");
                this.displayMessage();
            } else {
                document.location.href = response;
            }
        });
    }
    setEventListener(){
        let self = this;

        self.submit.addEventListener("click", function(event) {            
            let inputName = document.getElementById('login');
            let inputPass = document.getElementById('pass');

            let data = {};

            data.login = inputName.value;
            data.pass = inputPass.value;
            
            event.preventDefault(); 
            self.request("autorization.php", data);
        });
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

let formValidation = new FormAuthorization();