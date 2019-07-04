<div class="content-wrapper " style="">
        <div class="row bg-white">
            <h3 class="text-success text-center"><?= $this->session->flashdata('msg')?></h3>
        </div>
    <?php foreach($company as $company):?>
        <div class="row bg-white">
            <div class="col-md-1">
                <?php $photos = $this->Company_Model->fetch_company_profilephoto($company->company_id);
                    foreach($photos->result() as $photo){
                ?>
                <img src="<?= $photo->company_logu?>" style="width: 50px" class="rounded-circle img-thumbnail" alt="">
                <p><?= $photo->photo_id?></p>
                <?php }?>
            </div>
            <div class="col-md-9">
                <a href=""><h2><?= $company->company_name ?></h2></a>
                <p><?= $company->company_address?></p>
            </div>
            <div class="col-md-2">
                <a href="<?= base_url('company/'.$company->company_url.'/'.$company->company_id)?>">view</a>
                <a href="">Edit</a>
                <a href="<?= base_url('deletecompany/'.$company->company_id)?>">Delete</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
</body>
</html>