<div class="content-wrapper " style="">
        
            <?= $this->session->flashdata('message')?>

    <?php foreach($company as $company):?>
        <div class="row bg-white">
            <div class="col-md-1">
                <?php $photos = $this->Company->fetch_company_profilephoto($company->company_id);
                    foreach($photos->result() as $photo){
                ?>
                <a href=""><img src="<?= $photo->company_logu?>" style="width: 50px" class="rounded-circle img-thumbnail" alt=""></a>
                <?php }?>
            </div>
            <div class="col-md-9">
                <a href="<?= base_url('company/'.$company->company_url.'/'.$company->company_id)?>"><h2><?= $company->company_name ?></h2></a>
            </div>
            <div class="col-md-2">
                <a href="<?= base_url('company/'.$company->company_url.'/'.$company->company_id)?>">view</a>
                <a href="<?= base_url('company/edit/'.$company->company_url.'/'.$company->company_id)?>">Edit</a>
                <a href="<?= base_url('deletecompany/'.$company->company_id)?>">Delete</a>
            </div>
        </div>
        <div class="row bg-white">
            <div class="col-md-12">
                <p style="text-align: justify"><?= $company->company_address?></p>
            </div>
        </div>
    <?php endforeach ?>
</div>
</body>
</html>