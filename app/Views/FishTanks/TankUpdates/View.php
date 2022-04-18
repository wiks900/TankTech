<div class="card">
    <h5 class="card-header">Responsive Table</h5>
    <div class="table-responsive text-nowrap">
        <table class="table"  id="FishTankUpdates">
        <thead>
            <tr class="text-nowrap">
                <th>#</th>
                <th>Update Type</th>
                <th>Title</th>
                <th>Comment</th>
                <th>Date</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($TankUpdates as $TankUpdate){ ?>
                <tr>
                    <th scope="row"><?php echo $TankUpdate->FishTankUpdateId; ?></th>
                    <td class="col-2">
                        <div class="avatar flex-shrink-0 me-3 d-inline">
                            <span class="avatar-initial rounded bg-label-<?php echo $TankUpdate->UpdateTypeColor; ?> "><i class="bx <?php echo $TankUpdate->UpdateTypeIcon; ?>"></i></span>
                        </div>
                        <span class="d-inline" ><?php echo $TankUpdate->UpdateTypeName; ?></span>
                    </td>
                    <td><?php echo $TankUpdate->Title; ?></td>
                    <td><?php echo $TankUpdate->Comment; ?></td>
                    <td><?php echo $TankUpdate->Date; ?></td>
                    <td><?php echo $TankUpdate->Photo; ?></td>
                    <td>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                <a class="dropdown-item" href="TankUpdates/ModifyUpdate/<?php echo $FishTank->TankId; ?>/<?php echo $TankUpdate->FishTankUpdateId; ?>">Edit Update</a>
                                <a class="dropdown-item" href="TankUpdates/RemoveUpdate/<?php echo $FishTank->TankId; ?>/<?php echo $TankUpdate->FishTankUpdateId; ?>">Delete</a>
                                <a class="dropdown-item" href="FishTanks/TankTimeline/<?php echo $FishTank->TankId; ?>#<?php echo $TankUpdate->FishTankUpdateId; ?>">View On Timeline</a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready( function () {
    $('#FishTankUpdates').DataTable();
} );
</script>