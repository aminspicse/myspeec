<div class="row">
        <div class="col-6">
            <?php foreach($profile->result() as $row){ ?>
                <p class="margin">Full Name</p>
                <h6><b><?= $row->fname.' '.$row->lname?></b></h6>
                <p class="margin">Email</p>
                <p><b><?= $row->username ?></b> <i class="fas fa-globe-europe" title="Public"></i></p>
               
                <?php 
                    if($row->phone != ''){
                        echo '
                        <p class="margin">Phone</p>
                        <p><b>'.$row->phone.'</b> <i class="fas fa-globe-europe" title="Public"></i></p>
                        ';
                    }
                    if($row->gender != ''){
                        echo '<p class="margin">Gender</p>';
                        echo '<p><b>'.$row->gender .'</b> <i class="fas fa-globe-europe" title="Public"></i></p>';
                    }

                    if($row->birth_date != '' && $row->birth_month != '' && $row->birth_year !=''){
                        echo '<p class="margin">Date of Birth</p>';
                        echo '<p><b>'. $row->birth_date.' - '.$row->birth_month.' - '.$row->birth_year.'</b> <i class="fas fa-globe-europe" title="Public"></i></p>';
                    }

                    if($row->present_address != ''){
                        echo '
                            <p class="margin">Lives in</p>
                            <p><b>'.$row->present_address.'</b></p>
                        ';
                    }
                    
                    if($row->permanent_address != ''){
                        echo '
                            <p class="margin">Home</p>
                            <p><b>'.$row->permanent_address.'</b></p>
                        ';
                    }
                ?>
                <p><a href="<?= base_url('editinfo')?>">Edit Info</a></p>
            <?php } ?>
        </div>
        <div class="col-6">
            <?= $this->session->flashdata('msg') ?>
            <h6><b>About Self</b> <small><a href="<?= base_url('addabout') ?>" class="card-link" title="Add About"><i class="fas fa-plus"></i></a></small></h6>
            <?php foreach($about_self->result() as $ab){?>
                <p>
                <?= nl2br($ab->about_self) ?>
                <a href="<?= base_url('editabout/'.$ab->about_id)?>" title="Edit"><i class="fas fa-edit"></i></a> 
                <a href="<?= base_url('deleteabout/'.$ab->about_id)?>" title="Delete"><i class="fas fa-minus-circle"></i></a>
                </p>
            <?php } ?>
            <h6><b>Education</b> <small><a href="<?= base_url('addeducation') ?>" class="card-link" title="Add Education"> <i class="fas fa-plus"></i></a></small></h6>
            <?php foreach($education->result() as $edu){?>
                <p><i class="fas fa-graduation-cap"></i> Gradated form <a href=""> <?= $edu->department ?></a> at <a href=""><?= $edu->institute ?></a></p>
            <?php } ?>
            
        </div>
    </div>

</div>
</body>
</html>

<style>
    .margin{
        margin-bottom: 0px;
    }
</style>