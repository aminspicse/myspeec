
       <div class="content-wrapper img-thumbnail">
            
            <form action="" method="post">
            <div class="row ">
                <div class="col text-center">
                    <h2 class=""><u>Add New Abbreviation</u> </h2>
                    <?= $this->session->userdata('message')?>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="fname">Short Form <sup class="text-danger">*</sup></label>
                        <input type="text" name="short_form" value="<?= set_value('short_name')?>" placeholder="Short Form" class="form-control">
                        <span class="text-danger"><?= form_error('short_form')?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="lname">Long Form <sup class="text-danger">*</sup></label>
                        <input type="text" name="long_form" value="<?= set_value('short_name')?>" placeholder="Long Form" class="form-control">
                        <span class="text-danger"><?= form_error('long_form')?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Description</label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="2"><?= set_value('short_name')?></textarea>
                    </div>
                </div>
                <br>
                
                <div class="row">
                    <div class="col-md-2 offset-md-2">
                        <input type="submit" name="save" value="Save" class="btn btn-info btn-lg btn-block">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>