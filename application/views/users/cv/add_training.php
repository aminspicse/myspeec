
       <div class="content-wrapper bg-white">
            
            <form action="" method="post">
                <h2 class="text-success">Add Training</h2>
                <h3 class="text-info"><?= $success ?></h3>
                <span class="text-danger"><?= form_error('training_title') ?></span>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="training_title" id="training_title" class="form-control" placeholder="Training Title">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="training_institute" class="form-control" placeholder="Institute">
                    </div>

                </div>
               
                <div class="row">
                    <div class="col-md-4 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">From Date</div>
                        </div>
                        <input type="date" name="from_date" id="degree" style="" class="form-control">
                    </div>
                    <div class="col-md-4 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">To Date</div>
                        </div>
                        <input type="date" name="to_date" id="location" style="" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <select name="training_label" id="" class="form-control">
                            <option value=" ">Select Lavel</option>
                            <option value="(Expert)">Expert</option>
                            <option value="(Midium)">Midium</option>
                            <option value="(Entry)">Entry</option>
                            <option value="(Advance)">Advance</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="privacy" id="" class="form-control">
                            <option value="1">Public</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <button type="submit" name="save" class="btn btn-success btn-block">Save</button>
                    </div>
                </div>
                
            </form>
        </div>
    </body>
</html>
