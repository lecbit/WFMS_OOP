<?php

namespace classes;
use classes\interfaces\Igadget;


abstract class Product
{
    public $name;
    protected $price;
    public $discount = 20;

    const TETS = 10;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
        
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getProduct()
    {
        return "<hr><b>О товаре:</b><br>
        Наименование: {$this->name}<br>
        Цена со скидкой: {$this->getPrice()}<br>";
    }

    abstract protected function addProduct($name, $price);
}




class NotebookProduct extends Product implements Igadget
{
    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }

    public function getCpu(){
        return $this->cpu;
    }

    public function addProduct($name, $price, $numPages = 0){
        //dede
    }
    public function getCase()
    {

    }
}