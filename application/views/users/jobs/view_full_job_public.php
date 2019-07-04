
        <div class="content-wrapper bg-white" style="">
           <?php foreach($viewjob as $row):?>
               <div class="row">
                    <div class="col-md-8">
                         <h3><b><a href="" target="new"><?= $row->company_name?></a></b></h3>
                         <h4><?= $row->job_position?></h4>
                         <h6><b>Educational Requirement</b></h6>
                         <p><?= nl2br($row->education_requirements)?></p>
                         <h6><b>Experience Requirement</b></h6>
                         <p><?= nl2br($row->experience_requirements)?></p>
                         <h6><b>Job Responsibilities</b></h6>
                         <p><?= nl2br($row->job_responsibilities)?></p>
                         <h6><b>Additional Requirement</b></h6>
                         <p><?= nl2br($row->additional_requirements)?></p>
                    </div>
                    <div class="col-md-4">
                         <h6><b>Vacancy</b></h6>
                         <p><?= $row->total_post ?></p>
                         <h6><b>Employment Status </b></h6>
                         <p><?= $row->employment_status?></p>
                         <h6><b>Job Location</b></h6>
                         <p><?= $row->job_location?></p>
                         <h6><b>Salary</b></h6>
                         <p><?= $row->salary?></p>
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-12">
                         <p class="text-danger text-center">Published on: <?= $row->published_on.' Application Dedline: '.$row->application_dedline ?></p>
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-12">
                         <button class="btn btn-success btn-center">Apply Online</button>
                    </div>
               </div>
               <div class="row">
                    <div class="col-md-6">
                         <h5><b>Company Information: </b></h5>
                         <p><?= $row->company_name?></p>
                         <h6>Address: <a href=""><?= $row->company_address?></a></h6>
                         <h6>Website: <a href="http://<?= $row->company_website?>" target="_new"><?= $row->company_website?></a></h6> 
                         <h6>Facebook: <a href="http://<?= $row->company_facebook?>" target="_new"><?= $row->company_facebook?></a></h6> 
                    </div>
               </div>
           <?php endforeach ?>
         </div>
     </body>
     </html>
     