
       <div class="content-wrapper bg-white">
            
            <form action="" method="post">
                <h2 class="text-success">Edit Experience</h2>
                <span class="text-danger"><?= form_error('company_name'). form_error('job_position') ?></span>
                <?php foreach($edit->result() as $row){?>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="company_name" value="<?= $row->company_name?>" id="company_name" class="form-control" placeholder="Company/Institute Name">
                    </div>
                    <div class="col-6">
                        <input type="text" name="department" value="<?= $row->department?>" id="department" class="form-control" placeholder="Department">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="job_position" value="<?= $row->job_position?>" id="job_position" class="form-control" placeholder="Job Position">
                    </div>
                    <div class="col-6">
                        <input type="text" name="company_location" value="<?= $row->company_location?>" id="company_location" class="form-control" placeholder="Location">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">From Date</div>
                        </div>
                        <input type="date" name="from_date" value="<?= $row->from_date?>" id="degree" style="" class="form-control">
                    </div>
                    <div class="col-6 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">To Date</div>
                        </div>
                        <input type="date" name="to_date" value="<?= $row->to_date?>" id="location" style="" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <select name="privacy" id="" class="form-control">
                            <?php if($row->privacy == 1){
                                echo '<option value="1">Public</option>';
                            }else{
                                echo '<option value="0">Private</option>';
                            }
                            ?>
                            <option value="1">Public</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
                <?php }?>
                    <div class="col-6">
                        <button type="submit" name="update" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
