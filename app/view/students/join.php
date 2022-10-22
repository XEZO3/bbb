
<div id="join" style="position: absolute;top:41%;left:47%">
<a  class="btn btn-secondary" style="font-size: 28px;">join now</a>

</div>



<script>
setInterval(
    function(){
        $("#join").load("/student/checkMeetingButton/<?=$id?>")
    },5000
);
</script>

<?php
include(SHARED.DS."footer.php");
?>