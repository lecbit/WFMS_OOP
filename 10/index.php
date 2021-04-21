<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require_once "I3D.php";
require_once "OOP.php";


function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$book = new BookProduct('Книга', 10, 255);

debug($book);

echo $book->getProduct('book');

$book->addProduct('12','12');

$book->test();

?>

</body>
</html>