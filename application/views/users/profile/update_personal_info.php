
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
                    
                    <div class="col-4">
                        <label for="country">Country: </label>
                        <input type="text" name="country" value="<?= $this->session->userdata('country') ?>" placeholder="Country" class="form-control">
                        <span class="text-danger"><?= form_error('country')?></span>
                    </div>
                 </div>
                 <div class="row">
                    
                 </div>
                <br>
                
                <div class="row">
                    <div class="col-1 offset-9">
                        <input type="submit" name="update" value="Update" class="btn btn-info btn-lg">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>