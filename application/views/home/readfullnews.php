
        <div class="content-wrapper container">
            <?php foreach($query->result() as $row){ ?>
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center" style="font-size:25px"><a href="" class="card-link"><?= $row->news_title ?></a></h2>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-4">
                        <figure class="figure">
                            <img src="<?= $row->image_link ?>" alt="" width="100%" class='figure-img img-thumbnail'>
                            <figcaption class="figure-caption text-right"></figcaption>
                        </figure>

                        <p><strong>Related video:</strong></p>
                        <iframe src="<?= $row->video_link; ?>" allowfullscreen style=" width:100%;" frameborder="0"></iframe>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <?php 
                        //echo pref_replace("#\[nl\]#", "<br>\n",$row->news_post_1);
                        //echo $txt;
                        echo "<p style=''>".nl2br($row->news_post_1)."</p>";//"<pre>".."</pre>"; 
                        echo nl2br($row->news_post_2);
                        ?>
                        
                        <h4 class="text-center"><b>End of The Speec </b></h4>
                        <h4>Posted By: <a href="<?= base_url('Public_Profile/index/').$row->user_id;?>" class="card-link"><?= $row->fname.' '.$row->lname;?></a> On <?= $row->news_insert_time;?></h4>
                        <hr>
                        <form action="<?= base_url() ?>Home/Like_Dislike" method="get">
                            <p>
                                <!-- start like and like count -->
                                <?php if($likevalidation->num_rows()>0){ ?>
                                    <input type="submit" name="" disabled class="btn btn-link card-link" class="fa fa-thumbs-up" value="Liked" />
                                <?php }else{ ?>
                                    <input type="submit" name="likenews" class="btn btn-link card-link" class="fa fa-thumbs-up" value="Like" />
                                <?php } ?>
                                <span class="badge"><?= $likes->num_rows(); ?> People Likes</span>
                                <!-- end link and like count -->

                                <!-- start dislike and count dislike -->
                                <?php if($dislikevalidation->num_rows() >0){?>
                                    <input type="submit" name="dislikenews" disabled class="btn btn-link card-link" value="DisLiked" />
                                <?php }else{?>
                                    <input type="submit" name="dislikenews" class="btn btn-link card-link" value="DisLike" />
                                <?php }?>
                                <span class="badge"> <?= $dislikes->num_rows() ?> People DisLikes</span>
                                <!-- end dislike and count dislike --> 

                                <input type="button" value="Comments" class="btn btn-link card-link"> <span class="badge"> <?php echo $commentquery->num_rows();?> People Comments</span>
                                
                                <!-- Start FB Share Button -->
                                <div id="fb-root"></div>
                                    <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                    <!-- Your share button code -->
                                    <div class="fb-share-button" 
                                        data-href="http://www.myspeec.com/Home/ReadFullNews/<?php echo $row->news_id;?>" 
                                        data-layout="button_count">
                                </div>
                                <!-- End FB share button -->
                               
                             </p>
                            <input type="text" name="news_id" style="display:none" value="<?= $row->news_id; ?>">
                        </form> 
                        <form action="<?= base_url() ?>Home/Comment_news" method="get">
                            <label for=""><strong>Write Your Comment</strong></label>
                            <textarea name="comment" id="" cols="30" rows="3" class="form-control"></textarea>
                            <br>
                            <input type="submit" name="post_comment" value="Comment" class="btn btn-info pull-right">
                            <input type="text" name="news_id" style="display:none" value="<?= $row->news_id; ?>">
                        </form>
            <?php }; ?>
                        <br><br>
                        <div class="img-thumbnail">
                    <?php foreach($commentquery->result() as $com){ ?>
                        <div class="media img-thumbnail">
                            <div class="media-left">
                                <img src="<?= $com->photo ?>" class=" rounded-circle" style="width:30px">
                            </div>
                            <!-- start comment body -->
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="<?= base_url('Public_Profile/index/').$com->user_id ?>"><strong><?= $com->fname.''.$com->lname; ?> </strong> </a> 
                                    <small style="font-size: 10px"><i><?= $com->comment_date?></i></small>
                                    <!--Start comment edit-->
                                    <?php if($com->user_id == $this->session->userdata('user_id')){?>
                                        <span  data-toggle="modal" class="fas fa-pen-alt" data-target="#myModal"></span>
                                        <span><a href="<?= base_url('Home/delete_comment/').$row->news_id.'/'.$com->comment_id?>" class="fas fa-trash-alt card-link"></a></span>
                                    <?php }?>
                                    <!--end comment edit-->
                                </h4>
                                <p><?php echo nl2br($com->comment_news); ?></p> 
                                <?php if($com->comment_update != null){
                                    echo "<p class='text-info' style='font-size:10px'>Edited: ".$com->comment_update."</p>";
                                }?>
                                <!-- The Modal start  -->
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Edit Comment </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form action="" method="post">
                                                    <textarea name="comment" id="" cols="30" rows="3" class="form-control"><?= nl2br($com->comment_news)?></textarea>
                                                    <input type="text" style="display:none" name="comment_id" value="<?= $com->comment_id?>">
                                                    <br>
                                                    <input type="submit" name="update_comment" value="Update Comment" class="btn btn-lg btn-primary">
                                                </form>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <!--end model-->
                            </div>
                            <!--end comment main body -->
                        </div>
                    <?php }?>
                        </div>
                    </div>
                </div>
            
        </div>
    </body>

  
  
  
  
</html>