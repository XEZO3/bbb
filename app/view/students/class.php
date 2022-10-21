
<!-- <a href="<?=PATH?>meeting/joinmeeting/<?=$id?>" >join now</a> -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-auto d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">live</h5>
                
                <a href="<?=PATH?>student/join/<?=$id?>" class="btn btn-primary">join</a>
            </div>
            </div> 
        </div>
        <div class="col col-md-auto d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Records</h5>
                
                <a href="<?=PATH?>student/record/<?=$id?>" class="btn btn-primary">join</a>
            </div>
            </div> 
        </div>
    </div>
</div>

<?php
include(SHARED.DS."footer.php");
?>
