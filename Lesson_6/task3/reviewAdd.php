<?
    include "config.php";

    $review = $_POST;

    $a = $review['user_name'];
    $b = $review['review_text'];

    $sql = "insert into reviewItems (user_name, review_text) VALUES ('$a', '$b')";
    
    if(mysqli_query($connect, $sql)) {
        echo json_encode("Отзыв успешно добавлен!");
    }
?>