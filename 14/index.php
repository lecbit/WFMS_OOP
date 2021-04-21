<?php
use wfmPapka\interfaces\Igadget;
use app\{BookProduct, NotebookProduct};

require_once __DIR__ . '/vendor/autoload.php';
/*require_once "I3D.php";
require_once "IiGadget.php";
require_once "OOP.php";*/

// function autoLoader($class){
//     $class = str_replace('\\', '/', $class);
//     $file = __DIR__ .'/'. $class .'.php';
//     if(file_exists($file)){
//         require_once $file;
//     }
// }



//spl_autoload_register('autoLoader');



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
debug($notebook);
?>