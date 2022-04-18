
<?php print_r($TankUpdate); ?>

<div class="row">
    <div class="col-md-6 d-inline-block">
        <div class="card mb-4">
        <h5 class="card-header">Add Update For <?php print_r($FishTank->TankName); ?></h5>
            <div class="card-body">
            <form method="post" action="TankUpdates/ProcessUpdate">
                <div class="form-floating mb-4">
                    <input class="form-control" type="datetime-local" 
                    name="Date"
                    value="<?php echo date("Y-m-d\TH:i", strtotime(((isset($TankUpdate->Date)) ? $TankUpdate->Date : 'now' ))); ?>" 
                    id="html5-datetime-local-input">
                    <label for="html5-datetime-local-input" class="">Datetime</label>
                </div>

                <div class="form-floating mb-4">
                    <input type="text" class="form-control" id="floatingInput2" placeholder="Fish have attacked the city!" 
                    NAME="Title" value="<?php echo ((isset($TankUpdate->Title)) ? $TankUpdate->Title : '' ); ?>" required >
                    <label for="floatingInput">Title</label>
                </div>

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Whats been going on?" rows="6" style="height:100%;" name="Comment" 
                     required 
                    ><?php echo ((isset($TankUpdate->Comment)) ? $TankUpdate->Comment : '' ); ?></textarea>
                    <label for="floatingInput">Comment <small> Max 500 Characters</small></label>
                </div>

            </div>
        </div>
    </div>


    <div class="col-md-6 d-inline-block">
        <div class="card mb-4">
        <h5 class="card-header">Add an image</h5>
            <div class="card-body">
            
            <div class="mb-5">
                <label for="Image" class="form-label">A photo to remember?</label>
                <input class="form-control" type="file" id="formFile" name="Photo" onchange="preview()">
                <button onclick="clearImage()" class="btn btn-primary mt-3">Clear Image</button>
            </div>
            <img id="frame" src="" class="img-fluid" style="max-height:200px;"/>   

            <input type="hidden" name="FishTankUpdateId" value="<?php echo $FishTankUpdateId; ?>" />
            <input type="hidden" name="TankId" value="<?php echo $FishTank->TankId; ?>" />

            <button type="submit" class="btn btn-primary mt-3">Save Update</button>

            </div>
        </div>
    </div>

</div>

<script>
            function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('formFile').value = null;
                frame.src = "";
            }
        </script>