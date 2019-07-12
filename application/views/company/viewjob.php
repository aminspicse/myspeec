<div class="row"><h5 class="text-success"><?= $this->session->flashdata('msg')?></h5></div>
    <?php if($job->num_rows() > 0){
        foreach ($job->result() as $row) {
    ?>
    
    <div class="row bg-dark">
        <div class="col-md-10">
            <h4><a href="<?= base_url('viewfull/'.$row->company_id.'/'.$row->job_title)?>" target="_new"><?= $row->job_title?></a>
                <small class="text-danger" style="font-size: 15px;">
                <?= 'Published on: '.$row->published_on?>
                <?= 'Dedline: '.$row->application_dedline?>
                </small>
            </h4>
        </div>
        <div class="col-md-2">
        <a href="<?= base_url('viewfull/'.$row->company_id.'/'.$row->job_title)?>" target="_new">View</a>
        <a href="">Edit</a>
        <a href="<?= base_url('deletejob/'.$row->company_url.'/'.$row->company_id.'/'.$row->job_id)?>">Delete</a>
        </div>
    </div>
    <div class="row bg-white">
    <p><?= $row->education_requirements?></p>
    </div>
    <?php }}else{
        echo "<h2 class='text-center'>No Job Posted</h2>";
    }?>
</div>
</body>
</html>