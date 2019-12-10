<h4 class="text-center text-danger"><?= $this->session->flashdata('msg')?></h4>
<?php if($appliedlist->num_rows() >0){
    $i = 1;
    foreach($appliedlist->result() as $row):
    ?>
    <div class="row bg-white">
        <div class="col-md-1"><?= $i++.'.' ?>
        <img src="<?= $row->photo ?>" width="50px" height="50px" alt="">
        </div>
        <div class="col-md-3">
            <h5><?= $row->fname.' '.$row->lname?></h5>
            <p><?= $row->phone ?></p>
        </div>
        <div class="col-md-2">
            <h5><?= $row->username ?></h5>
            <p><?= $row->birth_date.'-'.$row->birth_month.'-'.$row->birth_year?></p>
        </div>
        <div class="col-md-4">
            <p>P.A: <?= $row->present_address?></p>
        </div>
        <div class="col-md-2">
            <a href="" class="card-link">Interview</a>
            <a href="" class="card-link">Hire</a>
            <a href="<?= base_url('applicationreject/'.$row->apply_id.'/'.$row->job_id)?>" class="card-link text-danger">Reject</a>
            <a href="" class="card-link">Report</a>
            <a href="<?= base_url('downloadcvemployee/'.$row->user_id)?>" class="card-link">Download</a>
        </div>
    </div>
    <div class="row">
        <p><?php //$row->about_self ?></p>
    </div>
    <?php endforeach; }else{?>
    
    <h2 class="text-center text-danger">No Applicant for this job</h2>
    
<?php }?>
</div>
</body>
</html>