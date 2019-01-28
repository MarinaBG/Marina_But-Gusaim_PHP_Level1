<?php
	include 'php/config.php';
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"></link>
	<script src="js/cart.js" type="text/javascript"></script>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<div id="cart">
		<h2>Корзина</h2>
		<div>Товаров: <span class="items"></span></div>
		<div>Сумма: <span class="amount"></span></div>
		<a href="#" class="btn-clear">Очистить</a>
	</div>

	<div id="products">
		<?php foreach ( $products as $id => $product ) { ?>
		<div class="product product-<?= $id ?>"> 
			<p class="name" data-id='<?= $id ?>'><b><?= $product['name'] ?></b></p>
			<p>Цена : <span class="price"><?= $product['price'] ?></span>
			&bull; В корзине : <span class="count">0</span></p>
			<div class="btn">
				<a href="#" class="btn-add" data-id="<?= $id ?>">Купить</a>
				<a href="#" class="btn-remove" data-id="<?= $id ?>">Удалить</a>
			</div>
		</div>
		<?php } ?>

	</div>
</body>
</html>