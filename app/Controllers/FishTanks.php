<?php

namespace App\Controllers;

class FishTanks extends BaseController
{
    
    function __construct() {
    
        $this->db = \Config\Database::connect('default');
    }

    public function index()
    {
        $builder = $this->db->table('fishtanks');
        $query = $builder->get();
        $FishTanks = $query->getResult();
        // print_r($Data);

        // return view('welcome_message');
        return LoadTemplate('FishTanks/Home', array(
                                                'FishTanks' => $FishTanks
                                    ));
    }

    public function TankTimeline($TankId)
    {
        $builder = $this->db->table('fishtanks');
        $query = $builder->getwhere(array('TankId' => $TankId));
        $FishTank = $query->getResult();
        
        if(!empty($FishTank)){
            $FishTank = $FishTank[0];
        }
        
        $builder = $this->db->table('fishtankupdates');
        $query = $builder->getwhere(array('TankId' => $TankId,
                                           ));
        $TankUpdates = $query->getResult();

        return LoadTemplate('FishTanks/TankTimeLine', array(
                                               'FishTank' => $FishTank,
                                                'TankUpdates' => $TankUpdates,
                                    ));
    }


    public function ViewTank($TankId)
    {
        $builder = $this->db->table('fishtanks');
        $query = $builder->getwhere(array('TankId' => $TankId));
        $FishTank = $query->getResult();


        
        if(!empty($FishTank)){
            $FishTank = $FishTank[0];
        }

        $builder = $this->db->table('devices');
        $query = $builder->getwhere(array('TankId' => $TankId,
                                           'Active' => '1'));
        $TankDevices = $query->getResult();


        $builder = $this->db->table('fishtankupdates')->join('updatetypes', 'updatetypes.UpdateTypeId = fishtankupdates.UpdateTypeId', 'left')->limit(3);
        $query = $builder->getwhere(array('TankId' => $TankId,
                                                     ));
        $TankUpdates = $query->getResult();

        
        // print_r($TankUpdates);
        // return view('welcome_message');
        return LoadTemplate('FishTanks/ViewTank', array(
                                                'FishTank' => $FishTank,
                                                'TankDevices' => $TankDevices,
                                                'TankUpdates' => $TankUpdates,
                                    ));
    }


    // Start of API Functions


    public function GetFishTanks()
    {
	
        $builder = $this->db->table('fishtanks');
        $query = $builder->get();

        foreach ($query->getResult() as $row) {
            echo $row->TankName;
        }
    }
    


}
