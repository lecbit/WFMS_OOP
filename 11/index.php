<?php
require_once "I3D.php";
require_once "IiGadget.php";
require_once "OOP.php";



function debug($data){
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function offerCase(Igadget $product){
    echo "<p>Предлагаем чехол для гаджета: {$product->getName()} </p>";
}

$book = new BookProduct('Книга', 10, 255);
$notebook = new NotebookProduct('Dell', 3000, 'intel');

offerCase($notebook);
//offerCase($book);

debug($book);

echo $book->getProduct('book');

class A{};
class B{};
class C{};

$a = new A;
$b = new B;
$c = new C;


?>