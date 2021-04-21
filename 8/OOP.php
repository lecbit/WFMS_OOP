<?php

class Product
{
    public $name;
    public $price;


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
        Цена: {$this->price}<br>";
    }
}

class NotebookProduct extends Product
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
}

class BookProduct extends Product
{
    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во стр: {$this->numPages}<br>";
        return $out;
    }

    public function getNumpages(){
        return $this->numPages;
    }
}