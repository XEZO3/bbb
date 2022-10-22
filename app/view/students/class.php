
<!-- <a href="<?=PATH?>meeting/joinmeeting/<?=$id?>" >join now</a> -->

<style>
    
</style>
<div class="container mt-5">
<div class="row justify-content-center">
        <div class="col col-md-auto d-flex justify-content-center">
            <a href="<?=PATH?>student/join/<?=$id?>">
                    <div  class="card" style="width: 18rem;height:18rem;background: linear-gradient(to right, #cc0000 28%, #ff99cc 122%);position:relative">
                    <span style="position: absolute;top:44%;left:30%;font-size:30px;color:white">Live Class</span>
                    </div> 
            </a>
        </div>
        <div class="col col-md-auto d-flex justify-content-center">
            <a href="<?=PATH?>student/recordShow/<?=$id?>">
            <div  class="card" style="width: 18rem;height:18rem;background:linear-gradient(to right, #3366ff 18%, #66ccff 67%);">
            <span style="position: absolute;top:44%;left:34%;font-size:30px;color:white">records</span>
            </div> 
            </a>
        </div>
        <div class="col col-md-auto d-flex justify-content-center">
            <a href="<?=PATH?>student/recordShow/<?=$id?>">
            <div  class="card" style="width: 18rem;height:18rem;background:linear-gradient(to right, #339933 12%, #00cc99 70%)">
            <span style="position: absolute;top:44%;left:35%;font-size:30px;color:white">Exams</span>
            </div> 
            </a>
        </div>
        <div class="col col-md-auto d-flex justify-content-center">
            <a href="<?=PATH?>student/recordShow/<?=$id?>">
            <div  class="card" style="width: 18rem;height:18rem;background:linear-gradient(to right, #ffff00 12%, #ff6600 70%)">
            <span style="position: absolute;top:44%;left:40%;font-size:30px;color:white">Files</span>
            </div> 
            </a>
        </div>
    </div>
</div>

<?php
include(SHARED.DS."footer.php");
?>
