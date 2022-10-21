



<div class="container" style="margin-top:13rem;">
    <div class="row justify-content-center">
        <div class="col-6">
        <form method="POST" action="<?=PATH?>meeting/createMeeting">
    <div class="mb-3">
        <label class="form-label">Meeting Title</label>
        <input type="text" name="title" class="form-control">
       
    </div>
    <div class="mb-3">
        <label class="form-label">Class</label>
        <select name="class_id" class="form-control" required>
            <option value="" default>--select class--</option>
            <?php foreach($classes as $row): ?>
                <option value="<?=$row['id']?>" default><?=$row['class_name']?></option>
                <?php endforeach ?>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
        </div>
    </div>
    






<?php
include(SHARED.DS."footer.php");
?>