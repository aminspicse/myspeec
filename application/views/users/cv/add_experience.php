
       <div class="content-wrapper bg-white">
            
            <form action="" method="post">
                <h2 class="text-success">Add Experience</h2>
                <span class="text-danger"><?= form_error('company_name'). form_error('job_position') ?></span>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company/Institute Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="department" id="department" class="form-control" placeholder="Department">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="job_position" id="job_position" class="form-control" placeholder="Job Position">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="company_location" id="company_location" class="form-control" placeholder="Location">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">From Date</div>
                        </div>
                        <input type="date" name="from_date" id="degree" style="" class="form-control">
                    </div>
                    <div class="col-md-6 input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">To Date</div>
                        </div>
                        <input type="date" name="to_date" id="location" style="" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <select name="privacy" id="" class="form-control">
                            <option value="1">Public</option>
                            <option value="0">Private</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" name="save" class="btn btn-success btn-block">Save</button>
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