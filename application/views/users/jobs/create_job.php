<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="content-wrapper bg-white">
        <br>
        <form action="" method="POST" enctype= "multipart/form-data" class="container">
            <div class="row">
                <div class="col-md-2"><label for="">Job Title</label></div>
                <div class="col-md-4 col-xs-12">
                    <input type="text" name="job_title" class="" value="<?= set_value('job_title') ?>" placeholder="Job Title" >
                    <span class="text-danger"><?= form_error('job_title') ?></span>
                </div>
                <div class="col-md-2"><label for="">Select Company</label></div>
                <div class="col-md-4 col-xs-12">
                    <select name="company_name" id="" class="">
                        <?php foreach($company as $company):?>
                            <option value="<?= $company->company_id ?>"><?= $company->company_name ?></option>
                        <?php endforeach?>
                    </select>
                    <span class="text-danger"><?= form_error('company_name') ?></span>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-2">Post Name</div>
                <div class="col-md-4">
                    <input type="text" name="Job_position" class="" value="<?= set_value('Job_position') ?>" placeholder="Post Name" >
                    <span class="text-danger"><?= form_error('Job_position') ?></span>
                </div>
                <div class="col-md-2"><label for="">Total Vacancy</label></div>
                <div class="col-md-4">
                    <input type="number" name="total_post" class="" value="<?= set_value('total_post') ?>" placeholder="Total Vacancy">
                    <span class="text-danger"><?= form_error('total_post') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"><label for="">Salary Amount</label></div>
                <div class="col-md-4">
                    <input type="text" name="salary" class="" value="<?= set_value('salary') ?>" placeholder="Salary">
                    <span class="text-danger"><?= form_error('salary') ?></span>
                </div>
                <div class="col-md-2"><label for="">Job Location</label></div>
                <div class="col-md-3">
                    <input type="text" name="job_location" class="" value="<?= set_value('job_location') ?>" placeholder="Job Location">
                    <span class="text-danger"><?= form_error('job_location') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"><label for="">Website <small>(if any)</small></label></div>
                <div class="col-md-4">
                    <input type="text" name="website_link" class="" value="<?= set_value('website_link') ?>" placeholder="Company Website/Blog Link" >
                </div>
                <div class="col-md-2"><label for="">Facebook <small>(if any)</small></label></div>
                <div class="col-md-4">
                    <input type="text" name="facebook_link" class="" value="<?= set_value('facebook_link') ?>" placeholder="Facebook Link" >
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"><label for="">Employment Status</label></div>
                <div class="col-md-4">
                    <input type="text" name="employment_status" class="" value="<?= set_value('employment_status') ?>" placeholder="Employment Status">
                    <span class="text-danger"><?= form_error('employment_status') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"><label for="">Educational Requirements</label></div>
                <div class="col-md-4">
                    <textarea name="education_requirements" id="" cols="" rows="" class="" placeholder="Educational Requirements"><?= set_value('education_requirements') ?></textarea>
                    <span class="text-danger"><?= form_error('education_requirements') ?></span>
                </div>
                <div class="col-md-2"><label for="">Job Responsibilities</label></div>
                <div class="col-md-4">
                    <textarea name="job_responsibilities" id="" cols="" rows="" class="" placeholder="Job Responsibilities "><?= set_value('job_responsibilities') ?></textarea>
                    <span class="text-danger"><?= form_error('job_responsibilities') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"> <label for="">Experience Requirements</label></div>
                <div class="col-md-4">
                    <textarea name="experience_requirements" id="" cols="" rows="" class="" placeholder="Experience Requirements"><?= set_value('experience_requirements') ?></textarea>
                </div>
                <div class="col-md-2"><label for="">Additional Requirements</label></div>
                <div class="col-md-4">
                    <textarea name="additional_requirements" id="" cols="" rows="" class="" placeholder="Additional Requirements "><?= set_value('additional_requirements') ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"><label for="">Address</label></div>
                <div class="col-md-6">
                    <textarea name="company_location" id="" cols="" rows=""><?= set_value('company_location')?></textarea>
                    <span class="text-danger"><?= form_error('company_location') ?></span>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <button name="create_job" class="btn btn-success">Create Job</button>
                </div>
            </div>
        </form>
    </div>
</main>
    </body>
</html>
<style>
    input,select,textarea{
        width: 300px;
    }
</style>