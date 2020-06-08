<?php 

include_once __DIR__ . "/common.php";

class Dipendente {

    // Traits
    use Anagrafica, Contatti;

    // Properties
    public $role;
    public $office;
    public $room;
    public $hire_date;
    public $status;
    public $boss_id;

    // Constructor
    public function __construct($_first_name, $_last_name) {

        if(is_numeric($_first_name)) {
            throw new Exception('Il campo $_first_name non deve essere numerico');
        } else { 
            $this -> first_name = $_first_name; 
        }

        if(is_numeric($_last_name)) {
            throw new Exception('Il campo $_last_name non deve essere numerico');
        } else { 
            $this -> last_name = $_last_name; 
        }

        $this -> role = "employee";
        $this -> office = "HR-12";
        $this -> room = "H725";
        $this -> hire_date = "2017-01-01";
        $this -> status = "active";
        $this -> primary_phone = "1234567890";
        $this -> primary_email = "email@power_azienda.com";
    }

}
