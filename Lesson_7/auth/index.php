<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></link>
    <link rel="stylesheet" href="jquery_ui_new_theme/jquery-ui.theme.css"></link>
    <script src="js/formRegistration.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="registration.php" method="POST" class="message-form mt-2">
            <div class="form-group name">
                <label for="name">Имя пользователя <span class="requiredField">*</span></label>
                <input type="text" name="name" value ="" class="form-control" id="name" placeholder="name">
            </div>
            
            <div class="form-group login">
                <label for="login">Логин <span class="requiredField">*</span></label>
                <input type="text" name="login" value ="" class="form-control" id="login" placeholder="login">
            </div>

            <div class="form-group pass">
                <label for="pass">Пароль <span class="requiredField">*</span></label>
                <input type="password" name="pass" value ="" class="form-control" id="pass" placeholder="password">
            </div>
            
            <div class="form-group email">
                <label for="email">E-mail <span class="requiredField">*</span></label>
                <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
            </div>

            <input type="submit" class="btn btn-primary" id="submit">

            <div id="dialog" title="Сообщение об ошибке!"></div>
        </form>
    </div>
</body>
</html>
