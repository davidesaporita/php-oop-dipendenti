<?php 

include_once __DIR__ . '/Dipendente.php';

class Dirigente extends Dipendente {
    
    // Properties
    public $benefit_group;
    public $private_jet;
    public $employees_ids;

    // Constructor
    public function __construct($_first_name, $_last_name, $_role, $_office, $_room, $_hire_date, $_status, $_primary_phone, $_primary_email) {
        $this -> first_name = $_first_name;
        $this -> last_name = $_last_name;
        $this -> role = $_role;
        $this -> office = $_office;
        $this -> room = $_room;
        $this -> hire_date = $_hire_date;
        $this -> status = $_status;
        $this -> primary_phone = $_primary_phone;
        $this -> primary_email = $_primary_email;
    }

}