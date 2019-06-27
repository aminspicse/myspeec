<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="content-wrapper bg-white">
        <br>
        <form action="" method="POST" enctype= "multipart/form-data" class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <input type="text" name="job_title" class="form-control" value="<?= set_value('job_title') ?>" placeholder="Job Title" >
                    <span class="text-danger"><?= form_error('job_title') ?></span>
                </div>
                <div class="col-md-6 col-xs-12">
                    <input type="text" name="company_name" class="form-control" value="<?= set_value('company_name') ?>" placeholder="Company Name" >
                    <span class="text-danger"><?= form_error('company_name') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="company_location" class="form-control" value="<?= set_value('company_location') ?>" placeholder="Company Location Like Dhaka,Hatirjil" >
                    <span class="text-danger"><?= form_error('company_location') ?></span>
                </div>
                <div class="col-md-6">
                    <input type="text" name="Job_position" class="form-control" value="<?= set_value('Job_position') ?>" placeholder="Job Position" >
                    <span class="text-danger"><?= form_error('Job_position') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="number" name="total_post" class="form-control" value="<?= set_value('total_post') ?>" placeholder="Total Post">
                    <span class="text-danger"><?= form_error('total_post') ?></span>
                </div>
                <div class="col-md-3">
                    <input type="text" name="salary" class="form-control" value="<?= set_value('salary') ?>" placeholder="Salary">
                    <span class="text-danger"><?= form_error('salary') ?></span>
                </div>
                <div class="col-md-3">
                    <input type="text" name="job_location" class="form-control" value="<?= set_value('job_location') ?>" placeholder="Job Location">
                    <span class="text-danger"><?= form_error('job_location') ?></span>
                </div>
                <div class="col-md-3">
                    <input type="text" name="employment_status" class="form-control" value="<?= set_value('employment_status') ?>" placeholder="Employment Status">
                    <span class="text-danger"><?= form_error('employment_status') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <textarea name="education_requirements" id="" cols="30" rows="4" class="form-control" placeholder="Educational Requirements"><?= set_value('education_requirements') ?></textarea>
                    <span class="text-danger"><?= form_error('education_requirements') ?></span>
                </div>
                <div class="col-md-6">
                    <textarea name="job_responsibilities" id="" cols="30" rows="4" class="form-control" placeholder="Job Responsibilities "><?= set_value('job_responsibilities') ?></textarea>
                    <span class="text-danger"><?= form_error('job_responsibilities') ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <textarea name="experience_requirements" id="" cols="30" rows="4" class="form-control" placeholder="Experience Requirements"><?= set_value('experience_requirements') ?></textarea>
                </div>
                <div class="col-md-6">
                    <textarea name="additional_requirements" id="" cols="30" rows="4" class="form-control" placeholder="Additional Requirements "><?= set_value('additional_requirements') ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="website_link" class="form-control" value="<?= set_value('website_link') ?>" placeholder="Company Website/Blog Link" >
                </div>
                <div class="col-md-3">
                    <input type="text" name="facebook_link" class="form-control" value="<?= set_value('facebook_link') ?>" placeholder="Facebook Link" >
                </div>
                <div class="col-md-4">
                    <input type="file" name="company_logu" class="form-control" value="<?= set_value('company_logu') ?>" placeholder="Company Logu" >
                </div>
                <div class="col-md-2">
                    <input type="submit" name="create_job" class="btn btn-success" value="Create Job" >
                </div>
            </div>
        </form>
    </div>
</main>
    </body>
</html>