<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  
  <div class="content-wrapper">
        
            <div class="col-8 offset-3">
                <form action="<?= base_url() ?>ChangePassword/index" method="post" class="">
                    <div class="row">
                        <div class="col-8">
                        <span class="text-danger"><?php // validation_errors();?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <label for=""><strong>New Password:</strong></label>
                            <input type="text" name="newpassword" class="form-control" placeholder="New Password">
                            <span class="text-danger"><?= form_error('newpassword') ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <label for=""><strong>Re-Enter New Password:</strong></label>
                            <input type="text" name="re_newpassword" class="form-control" placeholder="Re-Enter New Password">
                            <span class="text-danger"><?= form_error('re_newpassword') ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-8">
                            <input type="submit" name="changepass" value="Change Password" class="btn btn-info pull-right">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </main>
    <body>
</html>