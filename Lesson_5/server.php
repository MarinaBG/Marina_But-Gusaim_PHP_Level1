<?
    include "config.php";

    $id = $_GET['id'];
    $sql = "select views from images where id=$id";

    $res = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($res);

    $views = ++$data['views'];

    $sql = "update images set views=$views where id=$id";
    mysqli_query($connect, $sql);

    echo json_encode($data);
?>