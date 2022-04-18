<?php

namespace App\Controllers;

class TankUpdates extends BaseController
{
    
    function __construct() {
    
        $this->db = \Config\Database::connect('default');
    }

    public function View($TankId)
    {
        
        $builder = $this->db->table('fishtanks');
        $query = $builder->getwhere(array('TankId' => $TankId));
        $FishTank = $query->getResult();
        
        if(!empty($FishTank)){
            $FishTank = $FishTank[0];
        }
        
        $builder = $this->db->table('fishtankupdates')->join('updatetypes', 'updatetypes.UpdateTypeId = fishtankupdates.UpdateTypeId', 'left');
        $query = $builder->getwhere(array('TankId' => $TankId,
                                                     ));
        $TankUpdates = $query->getResult();
       
        return LoadTemplate('FishTanks/TankUpdates/View', array(
                                                'FishTank' => $FishTank,
                                                'TankUpdates' => $TankUpdates
                                    ));
    }


    public function ModifyUpdate($TankId, $FishTankUpdateId)
    {
        
        $builder = $this->db->table('fishtanks');
        $query = $builder->getwhere(array('TankId' => $TankId));
        $FishTank = $query->getResult();
        
        if(!empty($FishTank)){
            $FishTank = $FishTank[0];
        }
        
        $builder = $this->db->table('fishtankupdates');
        $query = $builder->getwhere(array('FishTankUpdateId' => $FishTankUpdateId,
                                                'TankId' => $TankId
                                                     ));
        $TankUpdate = $query->getResult();
        if(!empty($TankUpdate)){
            $TankUpdate = $TankUpdate[0];
        }
       
        return LoadTemplate('FishTanks/TankUpdates/ModifyUpdate', array(
                                                'FishTank' => $FishTank,
                                                'TankUpdate' => $TankUpdate,
                                                'FishTankUpdateId' => $FishTankUpdateId,
                                    ));
    }


    public function ProcessUpdate()
    {
        
        // print_r($_POST); exit;
        $Columns = array(
            'FishTankUpdateId' => 'REQUIRED',
            'TankId' => 'REQUIRED',
            'Title' => '',
            'Comment' => '',
            'Photo' => null,
            'Date' => date('Y-m-d H:i:s' ,strtotime("now")),
            'UpdateTypeId' => 1
            );
    
    $Config = array(
        'TableName' => 'fishtankupdates',
        'Data' => $_POST, 
        'Columns' => $Columns
    );
    $Return = PrepareMergeStatements($Config);

    $this->db->query($Return['Query']);

    
    return redirect()->to('TankUpdates/View/2'); 
    }



    // Start of API Functions


    


}
