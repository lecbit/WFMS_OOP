<?php

namespace app;
use wfmPapka\Product;
use wfmPapka\interfaces\I3D;


class BookProduct extends Product implements I3D
{
    public $numPages;
    public $action1;
    public $action2;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }

    public function test(){
        
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
        //
    }

    public function doAction1(){
        echo $this->action1 = '<p>Действие 1</p>';
        return $this;
    }

    public function doAction2(){
        echo $this->action2 = '<p>Действие 2</p>';
        return $this;
    }
}