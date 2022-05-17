<?php

    class User {

        public $name;
        public $surname;
        public $email;
        protected $discount = 0;

        function __construct($name, $surname, $email) {
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
        }

        public function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getDiscount(){
            return $this->discount;
        }

    }

    class RegisteredUser extends User{

        protected $discount = 20;

    }

    $user = new User('Francesco', 'Rossi', 'francesco.rossi@gmail.com');
    $registeredUser = new RegisteredUser('Matteo', 'Verdi', 'matteo.verdi@gmail.com');

?>