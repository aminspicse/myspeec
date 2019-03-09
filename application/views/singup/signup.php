
      <br>
        <div class="content-wrapper bg-light">
        <div><?php //validation_errors(); ?></div>
            <form action="" method="post" class="container">
                <div class="row">
                    <div class="col">
                        <input type="text" name="fname" placeholder="First Name" value="<?= set_value('fname') ?>" class="form-control">
                        <span class="text-danger"><?= form_error('fname') ?></span>
                    </div>
                    <div class="col">
                        <input type="text" name="lname" placeholder="Last Name" value="<?= set_value('lname') ?>" class="form-control">
                        <span class="text-danger"><?= form_error('lname') ?></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="email" name="username" placeholder="Email/User Name" value="<?= set_value('username') ?>" class="form-control">
                        <span class="text-danger"><?= form_error('username') ?></span>
                    </div>
                    <div class="col">
                        <input type="phone" name="phone" placeholder="Phone" value="<?= set_value('phone') ?>" class="form-control">
                        <span class="text-danger"><?= form_error('phone') ?></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                        <span class="text-danger"><?= form_error('password') ?></span>
                    </div>
                    <div class="col">
                        <input type="password" name="repassword" placeholder="Re-Password" class="form-control">
                        <span class="text-danger"><?= form_error('repassword') ?></span>
                    </div>
                </div>
                <br>
                <div class="row">
                    <p> </p>
                </div>
                <div class="row">
                    <div class="col-4">
                        <input type="checkbox" name="agreement" checked class="">I Accept This Aggriment
                    </div>
                    <div class="col-1 offset-7">
                        <input type="submit" name="signup" class="btn  btn-success" value="Sign Up">
                    </div>
                </div>
            </form>
        </div>
        </main>
    </body>
</html>