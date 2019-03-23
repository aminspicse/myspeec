<br><br>
<div class="row">
    <div class="col-md-4 offset-md-4 col-xs-12 col-sm-12 img-thumbnail">
        <p class="text-center"><img src="<?= $check['photo'] ?>" class="rounded-circle img" alt="" srcset=""></p>
        <h3 class="name text-center"><b><?= $check['fname'].' '. $check['lname']?></b></h3>
        <p class="text-center"><?= $check['username'] ?></p>
        <h4 class="text-center text-danger"><?php echo $error ?></h4><br>
        <form action="<?= base_url('Forgot_Password/change_password')?>" method="get"> 
            <input type="text" name="username"  style="display:none" value="<?= $check["username"] ?>">
            <input type="password" name="password" class="password" placeholder="Enter New Password"><br>
            <input type="password" name="re_password" class="repassword" placeholder="Re-Enter New Password">
            <button type="submit" name="change_password" class="change_password btn-info">Change Password</button>
        </form>
    </div>
</div>
</body>
<style>
        .img{
            align:center;
            width: 50px;
        }
        .password{
            width: 100%;
            height: 40px;
            border: 2px solid green;
            font-size: 20px;
            font-family: arial;
        }
        .repassword{
            width: 100%;
            height: 40px;
            margin-top: 5px;
            border: 2px solid green;
            font-size: 20px;
            font-family: arial;
        }
        .change_password{
            margin-top: 5px;
            width: 100%;
            height: 40px;
            font-size: 20px;
            font-family: arial;
        }
</style>
</html>