<?php

namespace App\Controllers;

class DataLogger extends BaseController
{
    
    function __construct() {
    
        $this->db = \Config\Database::connect('default');
    }

    public function index()
    {
        return LoadTemplate('ControllerDefault');
    }

    // Start of API Functions

    


    public function LogData()
    {
	
        print_r($_POST);
        exit;

    }
    


}
