
<!-- <a href="<?=PATH?>meeting/joinmeeting/<?=$id?>" >join now</a> -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-auto d-flex justify-content-center">
        <a href="<?=PATH?>student/join/<?=$id?>">
        <div class="card" style="width: 18rem;">
        <img src="<?=PATH?>micons/live-streaming.png" alt="notfound" class="card-img-top" style="width:100%;height:20em" /> 
        </div> 
        </a>
        </div>
        <div class="col col-md-auto d-flex justify-content-center">
            <a href="<?=PATH?>student/recordShow/<?=$id?>">
            <div class="card" style="width: 18rem;">
            <img src="<?=PATH?>micons/video.png" alt="notfound" class="card-img-top" style="width:100%;height:20em" /> 
            </div> 
            </a>
        </div>
    </div>
</div>

<?php
include(SHARED.DS."footer.php");
?>
