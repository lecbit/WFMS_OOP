<?php
class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;

    public static $countCar = 0;

    const TEST_CAR_SPEED = '100km';

    public function __construct($color, $wheels = 0, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        self::$countCar++;
    }

    public static function getCount(){
        return self::$countCar;
    }

    public function getCarInfo(){
        return "<h3>О моем авто:</h3>
        Марка: {$this->brand}<br>
        Цвет: {$this->color}<br>
        Кол-во колес: {$this->wheels}<br>
        Скорость: {$this->speed}<br>";
    }

    public function getPrototypeInfo(){
        return "<h3>Данные тестового авто:</h3>
        Наименование : ". self::TEST_CAR_SPEED ."<br>
        Скорость: ". self::TEST_CAR_SPEED ."<br>";
    }
}
?>