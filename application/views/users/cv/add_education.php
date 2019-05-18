
       <div class="content-wrapper bg-white">
            
            <form action="" method="post">
                <h2 class="text-success">Add Education</h2>
                <span class="text-danger"><?= form_error('institute'). form_error('degree') ?></span>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="institute" id="inst_name" class="form-control" placeholder="Institute Name">
                    </div>
                    <div class="col-6">
                        <input type="text" name="department" id="department" class="form-control" placeholder="Department">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="degree_post" id="degree" class="form-control" placeholder="Degree Name">
                    </div>
                    <div class="col-6">
                        <input type="text" name="location" id="location" class="form-control" placeholder="Location">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">From Date</div>
                        </div>
                        <input type="date" name="from_date" id="degree" style="" class="form-control">
                    </div>
                    <div class="col-6 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">To Date</div>
                        </div>
                        <input type="date" name="to_date" id="location" style="" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <input type="text" name="result" class="form-control" placeholder="Result">
                    </div>
                    <div class="col-3">
                        <select name="privacy" id="" class="form-control">
                            <option value="1">Public</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <button type="submit" name="save" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

<script>
    function placeholder(){
/*         var a = document.getElementById('type').value;
        var degree = document.getElementById('degree');
        var location = document.getElementById('location');
        var inst_name = document.getElementById('inst_name');
        if(a == 1){
            txt = document.getElementById('inst_name').placeholder = "School/University Name";
            degree.style.display = 'block';
            degree.placeholder = 'Certificate Name';
            location.style.display = 'block';
            location.placeholder = "Location";
            inst_name.style.display = 'block';
        }else if(a == 2){
            txt = document.getElementById('inst_name').placeholder = "Company/Institute Name";
            degree.style.display = 'block';
            degree.placeholder = 'Job Title';
            location.style.display = 'block';
            location.placeholder = "Location";
            inst_name.style.display = 'block';
        }else{
            txt = document.getElementById('inst_name').placeholder = "";
            degree.style.display = 'none';
            location.style.display = 'none';
            inst_name.style.display = 'none';
        }
        return txt; */
    }
</script>