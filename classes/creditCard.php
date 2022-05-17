<?php

    class CreditCard {

        public $number;
        public $expiration_date;

        function __construct($number, $expiration_date ) {
            $this->number = $number;
            $this->expiration_date = $expiration_date;
        }

        public function getNumber(){
            return $this->number;
        }

        public function getExpirationDate(){
            return $this->expiration_date;
        }

        public function isValid(){
            if($this->expiration_date < date('m/Y')){
                return 'Carta di credito scaduta';
            }else{
                return 'Carta di credito accettata';
            }
        }

    }

    $creditCard_1 = new CreditCard(123456789, '05/2021');
    $creditCard_2 = new CreditCard(123456789, '08/2023')

?>