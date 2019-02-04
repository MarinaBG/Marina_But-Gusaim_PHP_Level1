<?
$connect = mysqli_connect("localhost","root","","shop_lesson7");

$sql = "select * from products";

$res = mysqli_query($connect, $sql);

$products = [];

while($data = mysqli_fetch_assoc($res)) {
	$products[$data['id']] = $data;
}
?>
