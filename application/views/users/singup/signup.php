
      <br>
        <div class="col-md-5 offset-md-3 col-sm-12 col-xs-12">
        <div><?php //validation_errors(); ?></div>
        <h1 class=""><strong>Create an account</strong></h1>
            <form action="" method="post" class="">
                <div class="row">
                    <div class="form-group half">
                        <input type="text" name="fname" placeholder="First Name" value="<?= set_value('fname') ?>" class="form-control">
                        <span class="text-danger"><?= form_error('fname') ?></span>
                    </div>
                    <div class="form-group half">
                        <input type="text" name="lname" placeholder="Last Name" value="<?= set_value('lname') ?>" class="form-control">
                        <span class="text-danger"><?= form_error('lname') ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group full">
                        <input type="email" name="username" placeholder="Email Address" value="<?= set_value('username') ?>" class="form-control">
                        <span class="text-danger"><?= form_error('username') ?></span>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="form-group full">
                        <input type="phone" name="phone" placeholder="Phone" value="<?= set_value('phone') ?>" class="form-control">
                        <span class="text-danger"><?= form_error('phone') ?></span>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group half">
                        <input type="password" name="password" value="<?= set_value('password') ?>" placeholder="Password" class="form-control" >
                        <span class="text-danger"><?= form_error('password') ?></span>
                    </div>
                    <div class="form-group half">
                        <input type="password" name="repassword" value="<?= set_value('repassword') ?>" placeholder="Re-Password" class="form-control">
                        <span class="text-danger"><?= form_error('repassword') ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <h3 class=""><b>Date of Birth</b></h3>
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
                            }?>
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
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <b><label class="radio-inline"><input type="radio" name="gender" value="Male"> Male </label></b>
                        <b><label class="radio-inline"><input type="radio" name="gender" value="Female"> Female</label></b>
                        <span class="text-danger"><?= form_error('gender') ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group ">
                        <input type="submit" name="signup" class="btn btn-lg btn-success" value="Sign Up">
                    </div>
                </div>
            </form>
        </div>
        <style>
            .form-control{
                border: 2px solid black;
                margin: 0px;
                font-size: 24px;
                height: 40px;
                font-family: arial;

            }
            .half{
                width: 50%;
            }
            .full{
                width: 100%;
            }
            .birthdate{
                border: 2px solid black;
                margin: 0px;
                font-size: 24px;
                height: 40px;
                font-family: arial;
            }
            .form-group{
                margin: 0px;
            }
            .row{
                margin: 1px;
            }
            .text-danger{
                margin-bottom: -5px;
            }
        </style>
    </body>
</html>