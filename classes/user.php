<?php

    class User {

        public $name;
        public $surname;
        public $email;

        function __construct($name, $surname, $email) {
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
        }
    }

    class RegisteredUser extends User{

        public $discount = 20;

        public function getDiscount(){
            return $this->discount;
        }

    }

    $user = new User('Francesco', 'Rossi', 'francesco.rossi@gmail.com');
    $registeredUser = new RegisteredUser('Matteo', 'Verdi', 'matteo.verdi@gmail.com');


?>