<?php

namespace App\Controllers;

class Home extends BaseController
{

    function __construct() {
        $this->db = \Config\Database::connect('default');
    }

    public function index()
    {
        return view('welcome_message');
    }
 

}
