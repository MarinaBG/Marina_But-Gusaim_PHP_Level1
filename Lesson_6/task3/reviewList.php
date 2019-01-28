<?
include "config.php";

$sql = "select * from reviewItems";

$res = mysqli_query($connect, $sql);

$arrReviews = [];

while($data = mysqli_fetch_assoc($res)) {
    array_push($arrReviews, $data);
}

echo json_encode($arrReviews);
?>