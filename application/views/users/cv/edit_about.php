
       <div class="content-wrapper bg-white">
            
            <form action="" method="post">
                <h2 class="text-success">Add About Self</h2>
                <span class="text-danger"><?= form_error('about_self')?></span>
                <?php foreach($about->result() as $row){?>
                <div class="row col-12">
                    <label for="">Write Your about self in >=500 word</label>
                    <textarea name="about_self" id="" cols="30" rows="10" class="form-control"><?= $row->about_self?></textarea>
                </div>
                <div class="row">
                    <div class="col-3">
                        <select name="privacy_status" id="" class="form-control">
                            <option value="1">Public</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <input type="submit" name="update" value="Update" class="btn btn-success pull-right">
                    </div>
                </div>
                <?php } ?>
            </form>
        </div>
    </body>
</html>
