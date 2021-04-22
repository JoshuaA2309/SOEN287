<?php

session_start();

var_dump($_SESSION['cart']);

$whereIN = implode(',', $_SESSION['cart']);

$sql = "
SELECT * FROM products
WHERE id IN ($whereIN)
";

echo ($sql);