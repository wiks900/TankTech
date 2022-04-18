<!-- Start of row -->
<div class="row mb-5">  
    <?php
    foreach($FishTanks as $FishTank){
        $Config = array(
            'CardTitle' => $FishTank->TankName,
            'CardDescription' => $FishTank->TankDescription,
            'CardImage' => 'Uploads/UserImages/'.$FishTank->TankPhoto,
            'Hyperlink' => 'FishTanks/ViewTank/'.$FishTank->TankId,
        );
        echo OutputHorizontalCard($Config);
    }
    ?>  
</div>
<!-- End of row -->