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

        public function getName(){
            return $this->name;
        }

        public function getType(){
            return $this->type;
        }

        public function getPrice(){
            return $this->price;
        }
    }

$product_1 = new Product('Croccantini', 'Cibo', 25);
$product_2 = new Product('Pallina', 'Giochi', 10);

?>