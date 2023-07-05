<div class="container">
    <div class="row justify-content-center">
        <?php foreach($data as $row): ?>   
        <div class="col col-md-auto d-flex justify-content-center">
        <a href="<?=PATH?>student/class/<?=$row['id']?>" >
        <div class="card text-center" style="width: 20rem;">
        <img src="https://expertcode.net/upload/course/5.jpeg" class="card-img-top" alt="...">
            <!-- <div class="card-body">
                <h5 class="card-title"><?=$row['class_name']?></h5>
            </div> -->
            </div>
            </a> 
        </div>
        <?php endforeach ?>
    </div>
</div>

<?php
include(SHARED.DS."footer.php");
?>