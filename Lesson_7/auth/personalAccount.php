<?
if (!isset($_COOKIE['login']) || !isset($_COOKIE['pass'])) {
    header("Location: authorizationPage.php");
} else{?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html,
        body {
            height: 100%;
        }
        body {
            font-family: "Segoe UI", "Roboto", "Helvetica Neue", "Arial", sans-serif;
            font-size: 22px;
            font-weight: 500;
            color: #212529;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
        .info {
            margin-top: 30px;
            padding: 30px;
            padding-bottom: 50px;
            border: 2px solid #007bff;
            border-radius: 20px;
        }
        h1 {
            color: #007bff;
            margin-bottom: 30px;
            font-size: 30px;
            text-align: center;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="info">
            <h1>Добро пожаловать в личный кабинет!</h1>
            <p>Ваше имя: "<?=$_COOKIE['name']?>"</p>
            <p>Ваш логин: "<?=$_COOKIE['login']?>"</p>
        </div>
    </div>
</body>
</html>

<?}?>
