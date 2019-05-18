
       <div class="content-wrapper bg-white">
            
            <form action="" method="post">
                <h2 class="text-success">Edit Skill</h2>
                <span class="text-danger"><?= form_error('skill_name') ?></span>
            <?php foreach($skill->result() as $row){?>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="skill_name" value="<?= $row->skill_name?>" id="skill_name" class="form-control" placeholder="Add a skill">
                    </div>
                    <div class="col-6 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">From Date</div>
                        </div>
                        <input type="date" name="from_date" value="<?= $row->from_date?>" id="degree" style="" class="form-control">
                    </div>
                </div>
               
                <div class="row">
                    <div class="col-6 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">To Date</div>
                        </div>
                        <input type="date" name="to_date" value="<?= $row->to_date?>" id="location" style="" class="form-control">
                    </div>
                    <div class="col-2">
                        <select name="skill_label" id="" class="form-control">
                            <option value="<?= $row->skill_label?>"><?= $row->skill_label?></option>
                            <option value="">Select Lavel</option>
                            <option value="(Expert)">Expert</option>
                            <option value="(Midium)">Midium</option>
                            <option value="(Entry)">Entry</option>
                            <option value="(Advance)">Advance</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <select name="privacy" id="" class="form-control">
                            <option value="1">Public</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
            <?php }?>
                    <div class="col-2">
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                    </div>
                </div>
                
            </form>
        </div>
    </body>
</html>
