<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.3.1.min.js"></script>
    <title>Document</title>

    <script>
        $(document).ready(function() {
            $('#submit').click(function(event) {
                event.preventDefault();
                var data = $("#calc").serializeArray();
                console.log(data);

                $.ajax({
                    url: 'server.php',
                    type: 'POST',
                    data: data,
                    success: function(msg) {
                        $('#result').val(msg);
                    }               
                });
            });   
        });   
    </script>
</head>

<body>

    <form id="calc" action="#" method="POST">
        <input type="number" name="num1" value="0">

        <select name="mathOperation">
            <option value="sum">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option> 
            <option value="div">/</option>  
        </select>

        <input type="number" name="num2" value="0">

        <input id="submit" type="submit" value="=">

        <input id="result" type="text" name="result" value="0" disabled="disabled">
    </form>
    
</body>
</html>