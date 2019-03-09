
      
        <div class="content-wrapper">
                <div class="row">
                <?php foreach ($query->result() as $row) { ?>
                <div class="col-md-12 col-xs-12 img-thumbnail" style="height: 50%; width: 100%">
                    
                    
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <a href="<?= base_url() ?>Home/ReadFullNews/<?= $row->news_id; ?>"><img src="<?= $row->image_link ?>" style="width:100%; height: 100px" class="img-responsive" alt=""></a>
                        </div>
                        <div class="col-md-10 col-xs-12">
                        <h2 class="text-center" style="font-size: 25px" margin="0px"><a href="<?= base_url() ?>Home/ReadFullNews/<?= $row->news_id; ?>" class="card-link"><?= $row->news_title; ?></a></h2>
                            <p style="font-size: "> <?= trim(substr($row->news_post_1,0,400)) ?> 
                            <a style="font-size: 18px" href="<?= base_url() ?>Home/ReadFullNews/<?= $row->news_id; ?>" class="btn"><strong>more</strong></a>
                        </p>
                           <i> <p class="text-center">Posted by: <a href="<?= base_url('Public_Profile/index/'.$row->user_id) ?>" class="card-link"><?= $row->fname.' '.$row->lname ?></a> On: <?= $row->news_insert_time?></p></i>

                        </div>
                    </div>
                </div>
                <?php }?>
                </div>
                <br> 
                <ul class="pagination justify-content-center">
                    <li class="page-item "><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
            
        </div>

        <h1><?php ///echo $this->session->userdata('username') ?></h1>
        </nav>


    </body>
</html>

