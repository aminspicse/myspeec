
    <?php foreach($company->result() as $row):?>
    <div class="row">
        <div class="col-md-6">
            <p><b>Public url: </b><a href=""><?= base_url('company/'.$row->company_url)?></a></p>
            <p><b>Public Contact: </b></p>
            <p><?= $row->contact_1?><br>
                <?= $row->contact_2?><br>
                <?= $row->company_email?><br>
                <a href="http://<?= $row->company_website?>" target="_new"><?= $row->company_website?></a><br>
                <a href="http://<?= $row->company_facebook?>" target="_new"><?= $row->company_facebook?></a>
            </p>
           <p><b>Company Address:</b></p>
           <p><?= $row->company_address?></p>
           <a href="<?= base_url('editcompany/'.$row->company_url.'/'.$row->company_id)?>">Edit</a>
        </div>
        <div class="col-md-6">
            <p><b>About Company:</b></p>
            <ul><li><?= $row->company_about?></li></ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <h2 class="text-center"><a href="">0 Follower </a></h2>
        </div>
    </div>
    <?php endforeach ?>

</div>
</body>
</html>
