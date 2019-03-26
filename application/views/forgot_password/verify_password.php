<br><br>

<?php 
    ///foreach ($check->result() as $row) {
        
    //}
?>
<div class="row">
    <div class="col-md-4 offset-md-4 col-xs-12 col-sm-12 img-thumbnail bg-light">
        <p class="text-center"><img src="<?= $check['photo'] ?>" class="rounded-circle img" alt="" srcset=""></p>
        <h3 class="name text-center"><b><?= $check['fname'].' '. $check['lname']?></b></h3>
        <p class="text-center"><?= $check['username'] ?></p>
        <p class="text-success text-center">You Receved a 6 digit Temporary Password. Please check your email.</p>
        <h4 class="text-danger text-center"><?= $error ?></h4>
        <form action="<?= base_url('Forgot_Password/temp_password_val')?>" method="get">
            <h4><?= $check['temp_password']?></h4>
            <input type="text" name="code" style="display:none" value="<?= $check['temp_password']?>">
            <input type="text" name="username" style="display:none" value="<?= $check['username']?>">
            <input type="text" name="temp_password" class="temp_password" required placeholder="Enter Your Temporary Password">
            <button type="submit" name="verify_temp_password" class="send_email btn-info">Process Next</button>
        </form>
    </div>
</div>
</body>
<style>
        .img{
            align:center;
            width: 50px;
        }
        .name{
            margin-top: 0px;
            margin-bottom: 2px;
            align: center;
        }
        .temp_password{
            width: 100%;
            height: 40px;
            border: 2px solid green;
            font-size: 20px;
            font-family: arial;
        }
        .send_email{
            margin-top: 5px;
            width: 100%;
            height: 40px;
            font-size: 20px;
            font-family: arial;
        }
</style>
</html>