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
require_once "OOP.php";

function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$book = new Product('Книга', 10, null, 1000);
$notebook = new Product('Asus', 2000, 'intel');

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct('notebook');
?>

</body>
</html>