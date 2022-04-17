<?php

namespace App\Controllers;

class TankDevices extends BaseController
{

    function __construct() {
        $this->db = \Config\Database::connect('default');
    }

    public function index()
    {
        return view('welcome_message');
    }
    public function GetTankDevices()
    {
	
        $builder = $this->db->table('devices');
        $query = $builder->get();

        $Data  = $query->getResult();

        echo json_encode($Data);
        exit;
    }

    public function GetNextDeviceSchedule($DeviceId)
    {
	
        $builder = $this->db->table('deviceschedule');
        $query = $builder->getWhere(['DeviceId' => $DeviceId]);

        $Data  = $query->getResult();

        echo json_encode($Data);
        exit;
    }

    

}
