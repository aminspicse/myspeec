
       <div class="content-wrapper img-thumbnail">
            
            <form action="" method="post">
            <div class="row ">
                <div class="col text-center">
                    <h2 class=""><u>Update Your Personal Information</u> </h2>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="fname">First Name: </label>
                        <input type="text" name="fname" value="<?= $this->session->userdata('fname') ?>" placeholder="First Name" class="form-control">
                        <span class="text-danger"><?= form_error('fname')?></span>
                    </div>

                    <div class="col-md-4">
                        <label for="lname">Last Name: </label>
                        <input type="text" name="lname" value="<?= $this->session->userdata('lname') ?>" placeholder="Last Name" class="form-control">
                        <span class="text-danger"><?= form_error('lname')?></span>
                    </div>


                    <div class="col-md-4">
                        <label for="phone">Phone: </label>
                        <input type="phone" name="phone" value="<?= $this->session->userdata('phone') ?>" placeholder="Phone" class="form-control">
                        <span class="text-danger"><?= form_error('phone')?></span>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-4">
                        <label for="fathers_name">Father's Name: </label>
                        <input type="text" name="fathers_name" value="<?= $this->session->userdata('fathers_name') ?>" placeholder="Fathers Name" class="form-control">
                        <span class="text-danger"><?= form_error('fathers_name')?></span>
                    </div>

                    <div class="col-md-4">
                        <label for="mothers_name">Mothers's Name: </label>
                        <input type="text" name="mothers_name" value="<?= $this->session->userdata('mothers_name') ?>" placeholder="Mothers Name" class="form-control">
                        <span class="text-danger"><?= form_error('mothers_name')?></span>
                    </div>

                    <div class="col-md-4">
                        <label for="country">Country: </label>
                        <input type="text" name="country" value="<?= $this->session->userdata('country') ?>" placeholder="Country" class="form-control">
                        <span class="text-danger"><?= form_error('country')?></span>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-4">
                        <label for="present_address">Present Address: </label>
                        <input type="text" name="present_address" value="<?= $this->session->userdata('present_address') ?>" placeholder="Present Address" class="form-control">
                        <span class="text-danger"><?= form_error('present_address')?></span>
                    </div>

                    <div class="col-md-4">
                        <label for="permanent_address">Permanent Address: </label>
                        <input type="text" name="permanent_address" value="<?= $this->session->userdata('permanent_address') ?>" placeholder="Permanent Address" class="form-control">
                        <span class="text-danger"><?= form_error('permanent_address')?></span>
                    </div>

                    <div class="col-md-4">
                        <label for="nid">NID Number: </label>
                        <input type="text" name="nid" value="<?= $this->session->userdata('nid') ?>" placeholder="NID/Birth Certificate No" class="form-control">
                        <span class="text-danger"><?= form_error('nid')?></span>
                    </div>
                 </div>
                
                <br>
                
                <div class="row">
                    <div class="col-md-2 offset-md-9">
                        <input type="submit" name="update" value="Update" class="btn btn-info btn-lg btn-block">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>