<?php
session_start();
if (empty($_SESSION['cart'])){
$_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);

?>

<p>
Product was succesfully added to your cart.
<a href="shopping_cart.php">View Shopping Cart</a>

</p>