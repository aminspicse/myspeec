
        <div class="content-wrapper">
            
                <?php foreach($query->result() as $row):?>
                <div class="row" style="bg-color: red">
                    <img src="<?= $row->photo;?>" style="width: 100%; height: 100px" alt="">
                    <div class="col-md-2"><img src="<?= $row->photo;?>" style="margin-top: -100px; width: 100px" alt=""></div>
                </div>

                <div class="row bg-default">
                    <div class="col-md-2 col-xs-4">
                        <a href="<?= base_url('Profile/index/').$this->session->userdata('user_id') ?>" class="card-link">About</a>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <a href="<?= base_url('MySpeech/index.asp/') ?>" class="card-link">Posts</a>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <a href="<?= base_url('Profile') ?>" class="card-link">WorkPlace</a>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <a href="<?= base_url('Profile/total_friends') ?>" class="card-link">Total Friend <span><?= $total_friend->num_rows() ?></span> </a>
                    </div>
                </div>
 
                <?php endforeach; ?>
            