
<div id="join">

</div>



<script>
setInterval(
    function(){
        $("#join").load("/student/checkMeetingButton/<?=$id?>")
    },3000
);
</script>

<?php
include(SHARED.DS."footer.php");
?>