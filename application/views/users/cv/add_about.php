
       <div class="content-wrapper bg-white">
            
            <form action="" method="post">
                <h2 class="text-success">Add About Self</h2>
                <span class="text-danger"><?= form_error('about_self')?></span>
                <p class="text-success"><?= $success ?></p>
                <div class="row col-md-12">
                    <label for="">Write Your about self in >=500 word</label>
                    <textarea name="about_self" id="" cols="50" style="width: 100%" rows="10" class="form-control"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <select name="privacy_status" id="" class="form-control">
                            <option value="1">Public</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" name="submit" value="Save" class="btn btn-success btn-block pull-right">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
