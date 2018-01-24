<?php
	require('./ShoppingCart.php');
	require('./Product.php');
	require('./LineItem.php');
	use Apple\Checkout\ShoppingCart;
	use Apple\Checkout\LineItem;
	$album = new Product('DAMN', 11);
	$album2 = new Product('Section.80',50);
	$lineItem = new LineItem($album, 3);
	$lineItem2 = new LineItem($album2, 4);
	$cart = new ShoppingCart();
	$cart->add($lineItem);
	$cart->add($lineItem2);
	echo 'before<br><br>';
	var_dump($cart);
	$cart->remove($lineItem); 
	echo '<br><br>after<br><br>';
	var_dump($cart);
?>