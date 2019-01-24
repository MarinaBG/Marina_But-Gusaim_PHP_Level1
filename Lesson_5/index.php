<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css"></link>
    <script src="jquery-3.3.1.min.js"></script>
    <title>Document</title>

    <script>
        function updateViews(id_img) {
            $.ajax({
                method: "GET",
                url: "server.php",
                data: { id: id_img },
                dataType: 'json',
                error: function (request, status, error) {
                    console.log(error);
                },
            }).done(function(msg) {
                $("#views").html("Количество просмотров:" + msg.views);
            });
        }

        function showBigImg(name, views) {
            $("#bigimg").attr("src", "img/big/" + name);
        }
        
        function updateGallery() {
            $.ajax({
                method: "GET",
                url: "images.php",
                error: function (request, status, error) {
                    console.log(error);
                },
            }).done(function(msg) {
                $(".gallery_items").html(msg);
            });
        }
    </script>

</head>
<body>
    <div class="container">
    
        <div id="modal_form">
            <div class="big_img">
                <a href="#" onclick="updateGallery();" class="close">
                    <svg viewBox="0 0 21.9 21.9" width="15px" height="15px">
                        <path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z"/>
                    </svg>
                </a>
                <img id="bigimg" alt="no foto">
                <div id="views"></div>
            </div>            
        </div>
        
        <div class="gallery">           
            <h1>Галерея</h1>
            <div class="gallery_items">
                <?include "images.php"?>
            </div>
        </div>

    </div>    
</body>
</html>