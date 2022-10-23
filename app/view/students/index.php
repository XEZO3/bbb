<div class="container">
    <div class="row justify-content-center">
        <?php foreach($data as $row): ?>
        <div class="col col-md-auto d-flex justify-content-center">
        <div class="card text-center" style="width: 20rem;">
        <img src="<?=PATH?>micons/exam (1).png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$row['class_name']?></h5>
                
                <a href="<?=PATH?>student/class/<?=$row['id']?>" class="btn btn-primary">join</a>
            </div>
            </div> 
        </div>
        <?php endforeach ?>
    </div>
</div>

<?php
include(SHARED.DS."footer.php");
?>