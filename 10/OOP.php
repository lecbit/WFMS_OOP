<?php

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


class BookProduct extends Product implements I3D
{
    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }

    public function test(){
        var_dump(self::TEST2);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во стр: {$this->numPages}<br>";
        return $out;
    }

    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }

    public function getNumpages(){
        return $this->numPages;
    }

    public function addProduct($name, $price, $numPages = 0){
        //dede
    }

    
}