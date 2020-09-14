<?php 

include_once __DIR__ . '/Dipendente.php';

class Manager extends Dipendente {
    
    // Properties
    public $benefit_group;
    public $private_jet;
    public $employees_ids;

    // Constructor
    public function __construct($_first_name, $_last_name) {
        parent::__construct($_first_name, $_last_name);
        $this->role = "manager";
        $this->benefit_group = "Super";
        $this->private_jet = true;
        $this->employees_ids = [0, 5, 11, 54];
    }

}