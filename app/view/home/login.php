<?php
include(SHARED.DS."header.php");
?>
<style>
body{
        background-image: url("https://d.top4top.io/p_2478tdptc1.png");
    }
    .btn{
        background-color: #62C0E9;
        color: white;
        font-weight: bold;
    }
</style>
<div class="container" style="width: 30%;margin-top:10%;padding:10px">
<h1>Welcome Back</h1>
<small class="text-secondary mb-5">login to continue</small>
    <form method="post" class="mt-5" action="user/login">
        <div class="mb-5">
            <label class="form-label">username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-5">
            <label class="form-label">password</label>
            <input type="text" name="password" class="form-control">
        </div>
        <div class="mb-5">
           
            <input type="submit"  class="btn  w-100">
        </div>
    </form>
</div>
<!-- <div class="row" style="height:100%;margin:0;padding:0">
<div class="left">

</div>
<div class="right">

</div>
</div> -->
</body>
</html>
