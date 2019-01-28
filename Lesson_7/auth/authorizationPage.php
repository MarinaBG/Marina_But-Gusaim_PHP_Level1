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
<link rel="stylesheet" href="style/style.css">
<script src="js/formAutorization.js" type="text/javascript" defer></script>
<title>Document</title>
</head>

<body>
<div class="container">
    <form class="message-form mt-2" method="POST">
        <div class="form-group login">
            <label for="login">Логин <span class="requiredField">*</span></label>
            <input type="text" name="login" value ="<?=$_COOKIE["login"]?>" class="form-control" id="login">
        </div>

        <div class="form-group pass">
            <label for="pass">Пароль <span class="requiredField">*</span></label>
            <input type="password" name="pass" value ="<?=$_COOKIE["pass"]?>" class="form-control" id="pass">
        </div>

        <input type="submit" class="btn btn-primary" id="submit">

        <div id="dialog" title="Сообщение об ошибке!"></div>
    </form>
</div>
