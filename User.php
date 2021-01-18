<?php

    /*
        1) definire la struttura di una tabella users che contiene i dati degli utenti di un blog
        2) definire una classe User che "mappa" la tabella users
        3) creare alcune istanze della classe User per stampare i dati degli utenti
    */



    class User {

        protected $name;
        protected $lastname;
        protected $email;
        protected $age;
        protected $country;


        function __construct($_name, $_lastname, $_email, $_age = null, $_country = "") {
            $this->first_name = $_name;
            $this->last_name = $_lastname;
            $this->email = $_email;
            $this->age = $_age;
            $this->country = $_country;
        }

        public function getName() {
            return $this->name;
        }

        public function getLastName() {
            return $this->lastname;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getAge() {
            return $this->age;
        }

        public function setAge($_age) {
            $this->age = $_age;
        }

        public function getCountry() {
            return $this->country;
        }

        public function setCountry($_country) {
            $this->country = $_country;
        }

    public function getUser() {
        echo 'Name: ' . $this->getName() . '<br>';
        echo 'Last name: ' . $this->getLastName() . '<br>';
        echo 'Email: ' . $this->getEmail() . '<br>';
        echo 'Age: ' . $this->getAge() . '<br>';
        echo 'Country: ' . $this->getCountry() . '<br>';
    }

}
?>
