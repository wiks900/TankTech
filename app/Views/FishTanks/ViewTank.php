<!-- <div class="row"> -->

<div class="row">


    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card text-white card-has-bg click-col h-100 " style=" background-image:url('Uploads/UserImages/<?php echo $FishTank->TankPhoto; ?>'); 
                background-size:100% auto;
                background-position: center;
                background-repeat:no-repeat;
                ">
            <img class="card-img d-none" src="Uploads/UserImages/<?php echo $FishTank->TankPhoto; ?>" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
            <div class="card-img-overlay d-flex flex-column">
                <div class="card-body">
                    Add Photo Here
                </div>

            </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-8 mb-4 ">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><?php echo $FishTank->TankName; ?></h5>
                        <p class="mb-4">
                            <?php echo nl2br($FishTank->TankDescription); ?>
                        </p>

                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="../Template/Sneat/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-6 col-lg-4 col-xl-4 mb-4 ">
        <div class="card h-80">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Configured Devices</h5>
                    <small class="text-muted"><?php echo count($TankDevices); ?> devices connected</small>
                </div>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                        <a class="dropdown-item" href="javascript:void(0);">Tank Devices -></a>
                        <!-- <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a> -->
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">

                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 311px; height: 139px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <ul class="p-0 m-0">

                    <?php //print_r($TankDevices); 
                    ?>

                    <?php foreach ($TankDevices as $Device) { ?>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0"><?php echo $Device->DeviceName; ?></h6>
                                    <small class="text-muted"><?php echo substr($Device->DeviceDescription, 0, 35); ?></small>
                                </div>
                                <!-- <div class="user-progress">
                        <small class="fw-semibold">82.5k</small>
                    </div> -->
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-80">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Tank Temperature</h5>
                    <small class="text-muted">Past 24 Hours</small>
                </div>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                        <a class="dropdown-item" href="javascript:void(0);">Tank Devices -></a>
                        <!-- <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a> -->
                    </div>
                </div>
            </div>
            <div class="card-body my-4 px-1">
                
                                    
            <?php $Criteria = array();
                $Criteria['ChartType'] = "lc";
                $Criteria['ChartSize'] = "500x400";
                $Criteria['ChartLabelsAndData'] = array(
                                                    array("SPIRITS"=>21,
                                                        "SOFTDRINKS"=>41,
                                                        "WINE"=>32,
                                                        "PUB"=>5 )); //if you wish to use the concentric pie chart (inner split) type = pc or pd
                // $Criteria['PieLabelsAndData'] = array(
                // 									array("SPIRITS"=>21,
                // 										"SOFTDRINKS"=>41,
                // 										"WINE"=>32,
                // 										"PUB"=>5 )); // standard pie chart. type = p
                $Criteria['DisplayLabels'] = false;
                $Criteria['DisplayLegends'] = false;
                // $Criteria['ChartTitle'] = "Test Chart";
                $Chart = OutputLineChart($Criteria);
                echo $Chart;
                ?>


            </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-4 col-xl-4 ">
        <div class="card h-80">
            <div class="card-header d-flex align-items-center justify-content-between pb-0">
                <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Recent Updates</h5>
                    <!-- <small class="text-muted"> devices connected</small> -->
                </div>
                <div class="dropdown">
                    <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                        <a class="dropdown-item" href="FishTanks/TankTimeline/<?php echo $FishTank->TankId; ?>">Timeline</a>
                        <a class="dropdown-item" href="TankUpdates/ModifyUpdate/<?php echo $FishTank->TankId; ?>/0">Add Update</a>
                        <a class="dropdown-item" href="TankUpdates/View/<?php echo $FishTank->TankId; ?>">View All</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">

                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 311px; height: 139px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>
                <ul class="p-0 m-0">

                    <?php foreach ($TankUpdates as $Update) { ?>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-<?php echo $Update->UpdateTypeColor; ?>"><i class="bx <?php echo $Update->UpdateTypeIcon; ?>"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0"><?php echo $Update->Title; ?></h6>
                                    <small class="text-muted"><?php echo substr($Update->Date, 0, 35); ?></small>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>

</div>

<style type="text/css">
    .card-has-bg {
        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
        background-size: 120%;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .card-has-bg:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: inherit;
    }

    .card-has-bg:hover {
        transform: scale(0.98);
        box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.3);
        background-size: 130%;
        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .card-has-bg .card-body {
        transition: all 500ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .card-has-bg .card-body:hover {
        margin-top: 30px;
        cursor: pointer;
        transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);
    }
</style>