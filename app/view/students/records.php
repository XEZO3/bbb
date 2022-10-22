
<div class="container">
    <?php foreach($data as $row):?>
        <a target="_blank" href="<?=$row['url']?>">
    <div class="row justify-content-center">
        <div class="col-6">
        <div class="card">
        <?=$row['name']?>
        </div>
        </div>
    </div>
        </a>
    <?php endforeach ?>
</div>


<?php
include(SHARED.DS."footer.php");
?>