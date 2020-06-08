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
    public function __construct($_first_name, $_last_name, $_role, $_office, $_room, $_hire_date, $_status, $_primary_phone, $_primary_email) {

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

        
        $this -> role = $_role;
        $this -> office = $_office;
        $this -> room = $_room;
        $this -> hire_date = $_hire_date;
        $this -> status = $_status;
        $this -> primary_phone = $_primary_phone;
        $this -> primary_email = $_primary_email;
    }

}
