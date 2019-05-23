<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  
  <div class="content-wrapper bg-white">
        
            <div class="col-md-8 offset-md-3">
                <form action="<?= base_url('changepassword') ?>" method="post" class="">
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                        <span class="text-danger"><?php // validation_errors();?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <label for=""><strong>New Password:</strong></label>
                            <input type="text" name="newpassword" class="form-control" placeholder="New Password">
                            <span class="text-danger"><?= form_error('newpassword') ?></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
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