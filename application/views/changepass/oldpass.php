<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<br>
        <div class="container">
        <h1><?= validation_errors();?></h1>
            <div class="col-8 offset-3">
                <form action="" method="post" class="">
                    <div class="row">
                        <div class="col-8">
                            <label for=""><strong>Old Password:</strong></label>
                            <input type="text" name="oldpassword" value="<?php //echo $this->session->userdata('password') ?>" class="form-control" placeholder="Old Password">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-8">
                            <input type="submit" name="next" value="Next" class="btn btn-info pull-right">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    <body>
</html>