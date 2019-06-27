<!DOCTYPE html>
<html lang="en">
<head>
<SCRIPT language=JavaScript>

        var message = "Right Button is Disabled";

        function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

        if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

        document.onmousedown = rtclickcheck;

    </SCRIPT>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Myspeec Login or Signup</title>
    <link rel="stylesheet" href="<?= base_url('assets/users/bootstrap/css/bootstrap.min.css')?>">
    <link rel="icon" href="<?= base_url('assets/users/image/myspeec.png')?>" type="image/png" sizes="40x40"> 
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-fixed" style="background-color: #e7eff7">
        <div class="container">
            <a href="" class="navbar-brand">myspeec</a>
            <form action="<?= base_url('users/Login/Check_Validation') ?>" method="get" class="form-inline">
                <input type="text" name="username" class="loginemail" required placeholder="Email ">
                <input type="password" name="password" class="loginpassword" required placeholder="Password">
                <button type="submit" name="login" class="login-btn btn-success">Login </button>
            </form>
        </div>
    </nav>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 hide">
                <img src="<?= base_url('assets/users/image/earth.jpg')?>" class="eirth" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <h1 class=""><strong>Create an account</strong></h1>
                <div class="">
                    <form action="" method="post" class="form-inline">
                        <input type="text" name="fname" value="<?= set_value('fname') ?>" required class="name" placeholder="First Name" >
                        <input type="text" name="lname" value="<?= set_value('lname') ?>" required class="name" placeholder="Last Name" >
                        <input type="email" name="username" value="<?= set_value('username') ?>" required class="username" placeholder="Email ID" >
                        <span class="text-danger msg"><?= form_error('username')?></span>
                        <input type="phone" name="phone" value="<?= set_value('phone') ?>" value="<?= set_value('phone') ?>" required class="username" placeholder="Mobile Number" >
                        <span class="text-danger msg"><?= form_error('phone')?></span>
                        <input type="password" name="password" value="<?= set_value('password') ?>" required class="username" placeholder="Password">
                        <span class="text-danger msg"><?= form_error('password')?></span>
                        <input type="password" name="repassword" value="<?= set_value('repassword') ?>" required class="username" placeholder="Re-Enter Password">
                        <span class="text-danger msg"><?= form_error('repassword')?></span>
                        <h4 style="width:100%"><strong>Date of Birth</strong></h4> <br>
                        <select name="date" id="" class="birthdate">
                            <?php 
                            if(set_value('date') == true){
                                echo "<option value=".set_value('date').">".set_value('date')."</option>";
                                echo '<option value="">Day</option>';
                            }else{
                                echo '<option value="">Day</option>';
                            }
                            
                            for($i = 1; $i<=31; $i++){ 
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <select name="month" id="" class="birthdate">
                            <?php 
                            if(set_value('month') == true){
                                echo "<option value=".set_value('month').">".set_value('month')."</option>";
                                echo '<option value="">Month</option>';
                            }else{
                                echo '<option value="">Month</option>';
                            }
                            for($i = 1; $i<=12; $i++){ 
                                echo "<option value='$i'>$i</option>";
                            }?>
                        </select>
                        <select name="year" id="" class="birthdate">
                            <?php 
                            if(set_value('year') == true){
                                echo "<option value=".set_value('year').">".set_value('year')."</option>";
                                echo '<option value="">Year</option>';
                            }else{
                                echo '<option value="">Year</option>';
                            }
                            for($i = 2019; $i>=1920; $i--){ 
                                echo "<option value='$i'>$i</option>";
                            }?> 
                        </select>
                        <h5 class=""><a href="">Why Date of birth is importen?</a></h5>
                        <br>
                        <b><label class="radio-inline"><input type="radio" name="gender" value="Male"> Male </label></b>
                        <b><label class="radio-inline"><input type="radio" name="gender" value="Female"> Female</label></b>
                        <span class="text-danger"><?= form_error('gender') ?></span>
                        <p> 
                            You may receive SMS notifications from us and can opt out at any time.
                            I Agree all the terms and condition of myspeec.
                        </p><br>
                        <input type="submit" name="signup" class="btn  btn-success btn-lg" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer bg-light">
        <p class="text-center">Myspeec &copy; 2019</p>
    </footer>
</body>
<style>
    @media (max-width: 767.98px) { 
        .hide{
            display:none;
        }
    }
    .msg{
        margin-bottom:-20px;
    }
    .loginemail{
        
    }
    .loginpassword{
        //margin-left: 2px;
    }
    .login-btn{
        margin-left: 2px;
    }
    .gender{
        width: 50px;
        height: 40px;
        font-size: 25px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .name{
        width: 50%;
        height: 40px;
        font-size: 25px;
        border: 2px solid ;
        border-radius: 5px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .username{
        margin-top: 5px;
        width: 100%;
        height: 40px;
        font-size: 25px;
        border: 2px solid ;
        border-radius: 5px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .birthdate{
        height: 40px;
        font-size: 25px;
        border: 2px solid ;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
</html>