
<!-- <a href="<?=PATH?>meeting/joinmeeting/<?=$id?>" >join now</a> -->

<style>
   
</style>
<div class="container mt-5 pt-5">
<div class="row justify-content-center">
        <div class="col col-md-auto d-flex justify-content-center my-4 mx-2">
            <a href="<?=PATH?>student/join/<?=$id?>">
                    <div  class="card" style="width: 18rem;height:18rem;background:url('<?=PATH?>micons/live (1).png');background-size:cover;position:relative;border:none">
                    <!-- <span style="position: absolute;top:44%;left:30%;font-size:30px;color:white">Live Class</span> -->
                    </div> 
            </a>
        </div>
        <div class="col col-md-auto d-flex justify-content-center my-4 mx-2">
            <a href="<?=PATH?>student/recordShow/<?=$id?>">
            <div  class="card" style="width: 18rem;height:18rem;background:url('<?=PATH?>micons/videocolored.png');background-size:cover;border:none">
            <!-- <span style="position: absolute;top:44%;left:34%;font-size:30px;color:white">records</span> -->
            </div> 
            </a>
        </div>
        <div class="col col-md-auto d-flex justify-content-center my-4 mx-2">
            <a href="<?=PATH?>student/recordShow/<?=$id?>">
            <div  class="card" style="width: 18rem;height:18rem;background:url('<?=PATH?>micons/exam (1).png');background-size:cover;border:none">
            <!-- <span style="position: absolute;top:44%;left:35%;font-size:30px;color:white">Exams</span> -->
            </div> 
            </a>
        </div>
        <div class="col col-md-auto d-flex justify-content-center mt-4 mx-2 mb-3 ">
            <a href="<?=PATH?>student/recordShow/<?=$id?>">
            <div  class="card" style="width: 18rem;height:18rem;background:url('<?=PATH?>micons/homework.png');background-size:cover;border:none">
            <!-- <span style="position: absolute;top:44%;left:40%;font-size:30px;color:white">Files</span> -->
            </div> 
            </a>
        </div>
    </div>
</div>

<?php
include(SHARED.DS."footer.php");
?>
