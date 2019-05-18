       
            <div class="card">
                <div class="card-header ">
                    <div class="row">
                    <div class="col-4">
                        <p>CV</p>
                    </div>
                    <div class="col-6">
                        <?= $this->session->flashdata('msg')?>
                    </div>
                    </div>
                </div>
                <div class="row card-body">
                    <div class="col-4 bg-light">
                        <?php foreach ($profile->result() as $row) { ?>
                            <img src="<?= $row->photo?>" alt="" srcset="" style="margin-top: 20px; width: 200px">
                            <h4><b><?= $row->fname.' '.$row->lname?></b></h4>
                            <h6><i class="fas fa-phone"></i> <?= $row->phone?></h6>
                            <h6><i class="fas fa-envelope-square"></i> <?= $row->username?></h6>
                            <h6><i class="fas fa-home"></i> <?= $row->present_address?></h6>
                            <h5 class="text-success"><i class="fas fa-user"></i> Personal Information <small><a href="<?= base_url('editinfo')?>"><i class="fas fa-edit"></i></a></small></h5>
                            <h6 class="personal">Fathes's Name</h6>
                            <h6><b><?= $row->fathers_name?></b></h6>
                            <h6 class="personal">Mother's Name</h6>
                            <h6><b><?= $row->mothers_name?></b></h6>
                            <h6 class="personal">Date of Birth</h6>
                            <h6><b><?= $row->birth_date.'-'.$row->birth_month.'-'.$row->birth_year?></b></h6>
                            <h6 class="personal">Gender</h6>
                            <h6><b><?= $row->gender?></b></h6>
                            <h6 class="personal">Nationality</h6>
                            <h6><b><?= $row->country?></b></h6>
                            <h6 class="personal">NID/Birth Certificate</h6>
                            <h6><b><?= $row->nid?></b></h6>
                            <h6 class="personal">Permanent Address</h6>
                            <h6><b><?= $row->permanent_address?></b></h6>
                        <?php }?>
                    </div>
                    <div class="col-6 ">
                        <!-- Add experience -->
                        <h5><i class="fas fa-briefcase"></i> Experience </h5>
                        <?php foreach ($experience->result() as $exp) { ?>
                            <ul>
                                <li>
                                    <h6><b><?= $exp->job_position?></b>
                                        <small class="pull-right">
                                            <a href="<?= base_url('editexperience/'.$exp->experience_id)?>" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('deleteexperience/'.$exp->experience_id)?>" title="Delete"><i class="fas fa-minus-circle"></i></a>
                                            <?php 
                                                if($exp->privacy_status == 1){
                                                    echo '<a title="Public"><i class="fas fa-globe-europe"></i></a>';
                                                }else{
                                                    echo '<a title="Private"><i class="fas fa-user-lock"></i></a>';
                                                }
                                            ?>
                                        </small>
                                    </h6>
                                    <p class="personal">Work on: <b><?= 'From '.$exp->from_date.' To '.$exp->to_date?></b></p>
                                    <p>Company: <b><?= $exp->company_name.', '.$exp->company_location?></b></p>
                                </li>
                            </ul>
                        <?php }?>
                        <!-- Add skill -->
                        <h5><i class="fas fa-book-dead"></i> Skills </h5>
                        <?php foreach ($skill->result() as $skill) { ?>
                            <ul class="personal">
                                <li><?= $skill->skill_name.' <b>'.$skill->skill_label.'</b>' ?><small>
                                    <a href="<?= base_url('editskill/'.$skill->skill_id)?>" title="Edit"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('deleteskill/'.$skill->skill_id)?>" title="Delete"><i class="fas fa-minus-circle"></i></a>
                                    <?php 
                                        if($skill->privacy_status == 1){
                                            echo '<a title="Public"><i class="fas fa-globe-europe"></i></a>';
                                        }else{
                                            echo '<a title="Private"><i class="fas fa-user-lock"></i></a>';
                                        }
                                    ?></small>
                                </li>
                            </ul>
                        <?php }?>
                        <!-- Add Training -->
                        <h5><i class="fas fa-skull-crossbones"></i> Training</h5>
                        <?php foreach ($training->result() as $tran) { ?>
                            <ul>
                                <li>
                                    <h6><b><?= $tran->training_title.$tran->training_label?></b>
                                        <small>
                                            <a href="<?= base_url('edittraining/'.$tran->training_id)?>" title="Edit"><i class="fas fa-edit"></i></a>
                                            <a href="<?= base_url('deletetraining/'.$tran->training_id)?>" title="Delete"><i class="fas fa-minus-circle"></i></a>
                                            <?php 
                                                if($tran->privacy_status == 1){
                                                    echo '<a title="Public"><i class="fas fa-globe-europe"></i></a>';
                                                }else{
                                                    echo '<a title="Private"><i class="fas fa-user-lock"></i></a>';
                                                }
                                            ?>
                                        </small>
                                    </h6>
                                    <p class="personal">Institute: <b><?= $tran->training_institute ?></b></p>
                                    <p>Valid Untill: <b><?php echo $tran->from_date.' To ';
                                    if($tran->to_date == ''){ echo 'continue';}else{echo $tran->to_date;}?></b></p>
                                </li>
                            </ul>
                        <?php }?>
                        <!-- Add education -->
                        <h5><i class="fas fa-graduation-cap"></i> Education</h5>
                        <?php foreach ($education->result() as $edu) { ?>
                            <ul>
                                <li>
                                    <h6><b><?= $edu->degree ?></b></h6>
                                    <p class="personal">Institute: <b><?= $edu->institute ?></b></p>
                                    <p class="personal">Department: <b><?= $edu->department?></b></p>
                                    <p class="personal">Result: <b><?= $edu->result?></b></p>
                                    <p>Valid Untill: <b><?= $edu->from_date.' To '.$edu->to_date?></b></p>
                                </li>
                            </ul>
                        <?php }?>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<style>
    .personal{
        margin-bottom: 0px;
    }
</style>