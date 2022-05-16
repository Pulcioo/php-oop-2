<?php

class Product {

    public $name;
    public $type;
    public $price;

    function __construct($name, $type, $price) {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }
}

$product_1 = new Product('Croccantini', 'Alimentare', 25);
$product_2 = new Product('Pallina', 'Giochi', 10);

?>