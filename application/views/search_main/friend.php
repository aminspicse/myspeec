    <?php if($search_friends->num_rows() >0){?>
        <?php foreach ($search_friends->result() as $row) { ?>
            <div class="row img-thumbnail col-md-12">
                <div class="col-md-1 col-xs-3 col-sm-3">
                <a href="<?= base_url('Public_Profile/index/'.$row->user_id) ?>"><img src="<?= $row->photo?>" class="rounded-circle" alt=" " style="width: 80%;"></a>
                    
                </div>
                <div class="col-md-5 col-xs-10 col-sm-3">
                    <a href="<?= base_url('Public_Profile/index/'.$row->user_id) ?>"><h4><?= $row->fname.' '. $row->lname?></h4></a>
                    <p style="margin-top: -10px; margin-bottom: 0px"><?= $row->country?></p>
                </div>
                <div class="col-md-2">
                    <a href="<?= base_url('SMS/chating/'.$row->user_id) ?>"><h6>Send Message</h6></a>
                </div>
            </div>
        <?php }} else{?>
            <div class="row">
                <h2>Data not found</h2>
            </div>
    <?php }?>
    


</div>

</main>
</body>
</html>