<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.3.1.min.js"></script>
    <title>Document</title>

    <script>
        $(document).ready(function() {
            var btnValue = "";
            
            $('#submit').click(function(event) {
                event.preventDefault();
                var data = $("#calc").serializeArray();
                data.push({ name: 'mathOperation', value: btnValue.value});

                $.ajax({
                    url: 'server.php',
                    type: 'POST',
                    data: data,
                    success: function(msg) {
                        $('#result').val(msg);
                    }               
                });
            }); 
            
            $('button').click(function(event) {
                btnValue = event.target;
                
                $('button').each(function(){
                    $(this).css("background", "");
                });

                $(btnValue).css("background", "lightblue");
            });
            
        });   
    </script>
</head>

<body>

    <form id="calc" action="#" method="POST">
        <input type="number" name="num1" value="0">

        <button type="button" value="sum">+</button>
        <button type="button" value="sub">-</button>
        <button type="button" value="mul">*</button> 
        <button type="button" value="div">/</button>         

        <input type="number" name="num2" value="0">

        <input id="submit" type="submit" value="=">

        <input id="result" type="text" name="result" value="0" disabled="disabled">
    </form>
    
</body>
</html>