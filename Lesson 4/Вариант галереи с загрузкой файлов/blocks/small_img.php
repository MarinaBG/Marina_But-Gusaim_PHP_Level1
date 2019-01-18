<?
    $mas = scandir("img/small");

    foreach ($mas as $key => $value) {
        if ($key != 0 && $key != 1) {
            echo "<a href='#modal_form' onclick='document.getElementById(\"bigimg\").src=\"img/big/$value\";'><img src='img/small/$value' alt='no foto'></a>";
        }
    }

?>