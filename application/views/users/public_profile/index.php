<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
        <div class="content-wrapper bg-white">
            <?php foreach($profile->result() as $rows){?>
            <div class="row" style="bg-color: red">
                <img src="<?= $rows->photo;?>" style="width: 100%; height: 100px" alt="">
                <div class="col-md-2">
                    <img src="<?= $rows->photo;?>" style="margin-top: -100px; width: 100px" alt="">
                    
                </div>
            </div>
            <?php }?>
            <div class="row bg-default">
                <div class="col-md-2 col-xs-4">
                    <a href="<?= base_url('view/'.$rows->user_id.'/'.url_title($rows->fname.' '.$rows->lname))?>" class="card-link">About</a>
                </div>
                <div class="col-md-2 col-xs-4">
                    <a href="<?= base_url('view/'.$rows->user_id.'/'.url_title($rows->fname.' '.$rows->lname).'/posts')?>" class="card-link">Posts</a>
                </div>
                <div class="col-md-1 col-xs-4">
                    <a href="" class="card-link">CV</a>
                </div>
                <div class="col-md-2 col-xs-4">
                    <a href="<?= base_url('workplace/'.$rows->user_id.'/'.url_title($rows->fname.' '.$rows->lname))?>" class="card-link">workplace</a>
                </div>
                <div class="col-md-2 col-xs-4">
                    <a href="<?= base_url('users/MakeFriend/makefriend/').$user_id ?>" class="card-link">
                    <?php if($filter_request->num_rows()>0){
                        echo "Connected";
                     }else{
                         echo "Connect me";
                     } ?>
                    </a>
                </div>
                <div class="col-md-2 col-xs-4">
                    <a href="<?= base_url('chat/').$user_id ?>" class="card-link">Send Message</a>
                </div>
                <input type="text" id="user_id" style="display:none" value="<?= $user_id ?>">
            </div>
        
   