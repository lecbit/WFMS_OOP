<?php

namespace app;
use wfmPapka\Product;
use wfmPapka\interfaces\Igadget;
use wfmPapka\traits\Tcolor;

class NotebookProduct extends Product implements Igadget
{
    use Tcolor;
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