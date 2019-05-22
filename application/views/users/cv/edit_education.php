
       <div class="content-wrapper bg-white">
            
            <form action="" method="post">
                <h2 class="text-success">Edit Education</h2>
                <span class="text-danger"><?= form_error('institute'). form_error('degree') ?></span>
            <?php foreach($education->result() as $row){ //start foreach ?>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="institute" value="<?= $row->institute ?>" id="inst_name" class="form-control" placeholder="Institute Name">
                    </div>
                    <div class="col-6">
                        <input type="text" name="department" value="<?= $row->department ?>" id="department" class="form-control" placeholder="Department">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="degree" value="<?= $row->degree ?>" id="degree" class="form-control" placeholder="Degree Name">
                    </div>
                    <div class="col-6">
                        <input type="text" name="location" value="<?= $row->location ?>" id="location" class="form-control" placeholder="Location">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">From Date</div>
                        </div>
                        <input type="date" name="from_date" value="<?= $row->from_date ?>" id="degree" style="" class="form-control">
                    </div>
                    <div class="col-6 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">To Date</div>
                        </div>
                        <input type="date" name="to_date" value="<?= $row->to_date ?>" id="location" style="" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <input type="text" name="result" value="<?= $row->result ?>" class="form-control" placeholder="Result">
                    </div>
                    <div class="col-3">
                        <select name="privacy" id="" class="form-control">
                            <option value="1">Public</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
            <?php } //end foreach?>
                    <div class="col-6">
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
