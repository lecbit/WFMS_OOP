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
    echo '<pre>' . print_r($data) . '</pre>';
}

$car1 = new Car('черный',4 ,170 ,'volwo');

$car2 = new Car('черный',4 ,200 ,'MWB');


echo $car1->getCarInfo();
echo $car2->getCarInfo();
$car1->getLorem();
?>

</body>
</html>