<div class="content-wrapper " style="">
<?php if($photos->num_rows() > 0){?>
    <?php foreach($photos->result() as $photo): ?>
    <div class="row">
        <div class="col-md-12">
            <img src="<?= $photo->cover_photo ?>" calss="img-thumbnail" style="width: 100%; height: 150px" alt="">
            <h2 style="margin-top: -50px" class="text-center"><a href=""><?= $photo->company_name?></a></h2>
            <img src="<?= $photo->company_logu ?>" style="width: 100px; height: 100px; margin-top: -100px" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-1">
            <a href="<?= base_url('company/'.$photo->company_url.'/'.$photo->company_id)?>">About</a>
        </div>
        <div class="col-md-1">
            <a href="">Job</a>
        </div>
        <div class="col-md-2">
            <a href="<?= base_url('changephoto/'.$photo->company_id) ?>">Change Logu</a>
        </div>
    </div>
    
    <?php endforeach ?>
<?php }else{?>
    <form action="" method="post" name="company_photo" enctype="multipart/form-data">
    <br>
        <div class="row">
            <div class="col-md-9">
                Company Logu: <input type="file" name="company_logu" placeholder=""><br><br>
                <p class="text-danger">Company Logu is Mendatory for Enjoying more company Features</p>
            </div>
            <div class="col-md-2">
                <br>
                <button name="upload_photo" class="btn btn-success btn-block">Upload Photo</button>
            </div>
        </div>
    </form>
    
<?php }?>
       
