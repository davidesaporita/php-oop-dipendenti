<?php 

trait Anagrafica {
    
    // Properties
    public $prefix;
    public $first_name;
    public $last_name;
    public $birth_date;

    // Methods
    public function getName() {
        return $first_name . " " . $last_name;
    }

    public function getBirthDate() {
        return $birth_date;
    }

}

trait Contatti {

    // Properties
    public $primary_phone_number;
    public $secondary_phone_number;
    public $primary_email;
    public $secondary_email;
    public $home_state;
    public $home_city;
    public $home_address;
    public $home_ZIPcode;

}