<?php
$name = "Rima Kundu"; // string
// echo var_dump($name);

$num = 10; // integer
// echo var_dump($num);

$numFloat = 100.5; // float
// echo var_dump($numFloat);

$bool = true; // boolean
// echo var_dump($bool);

$arr = ["rima", 20]; // array
// echo var_dump($arr);

$empty = null; // null
// echo var_dump($empty);

// $user = new className(); // object(class)

$connection = ftp_connect("127.0.0.1") or die("local host not found"); // resource
echo var_dump($connection);


?>