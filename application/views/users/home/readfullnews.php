
        <div class="content-wrapper bg-white" style="">       
            <?php foreach($query->result() as $row){ ?>
                <div class="row">
                    <div class="col-12">
                        <h2 class="" style="font-size:25px"><a href="" class="card-link"><?= $row->news_title ?></a></h2>
                    </div>
                </div>
                <div class="row "> 
                    <div class="col-md-4 col-xs-12">
                        <?php if($row->image_link != ''){?>
                            <figure class="figure">
                                <a href="<?= $row->image_link?>" target="_new"><img src="<?= $row->image_link ?>" alt="" width="100%" class='figure-img img-thumbnail'></a>
                                <figcaption class="figure-caption text-right"></figcaption>
                            </figure>
                        <?php } ?>
                        <?php if($row->video_link != ''){?>
                            <p><strong>Related video:</strong></p>
                            <iframe src="<?= $row->video_link; ?>" allowfullscreen style=" width:100%;" frameborder="0"></iframe>
                        <?php } ?>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <?php 
                            echo "<p style=''>".nl2br($row->news_post_1)."</p>";//"<pre>".."</pre>"; 
                            echo nl2br($row->news_post_2);
                            if($row->user_privacy == '1'){
                                $link = '<a href='.base_url('view/'.$row->user_id.'/'.url_title($row->fname.' '.$row->lname)).'>'.$row->fname.' '.$row->lname.'</a>';
                            }else{
                                $link = "Hidden";
                            }
                        ?>
                        
                        <h6 class="text-center"><b>End of The Speec </b></h6>
                        <p>Posted By: <?= $link ?> On <?= $row->news_insert_time;?></p>
                        <hr>
                        <form action="<?= base_url('likedislike') ?>" method="get">
                            <p>
                                <!-- start like and like count -->
                                <?php if($likevalidation->num_rows()>0){ ?>
                                    <button type="submit" disabled name="likenews" class="btn btn-link card-link" class="fa fa-thumbs-up"><span title="Liked"><i class="fas fa-thumbs-up"></i></span></button>
                                    <span class="badge">You and <?= $likes->num_rows()-1 ?> People Likes</span>
                                <?php }else{ ?>
                                    <button type="submit" name="likenews" class="btn btn-link card-link" class="fa fa-thumbs-up"><span class="fas fa-thumbs-up"></span></button>
                                    <span class="badge"><?= $likes->num_rows(); ?> People Likes</span>
                                <?php } ?>
                                
                                <!-- end link and like count -->

                                <!-- start dislike and count dislike -->
                                <?php if($dislikevalidation->num_rows() >0){?>
                                    <button type="submit" name="dislikenews" disabled class="btn btn-link card-link"><span class="fas fa-thumbs-down"></span></button>
                                    <span class="badge">You and <?= $dislikes->num_rows()-1 ?> People DisLikes</span>
                                <?php }else{?>
                                    <button type="submit" name="dislikenews" class="btn btn-link card-link"><span class="fas fa-thumbs-down"></span></button>
                                    <span class="badge"> <?= $dislikes->num_rows() ?> People DisLikes</span>
                                <?php }?>
                                
                                <!-- end dislike and count dislike --> 

                                <input type="button" value="Comments" class="btn btn-link card-link"> <span class="badge"> <?php echo $commentquery->num_rows();?> Comments</span>
                                
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
                                        data-href="<?= base_url('details/'.$row->news_id.'/'.url_title($row->news_title))?>" 
                                        data-layout="button_count">
                                </div>
                                <!-- End FB share button -->
                               
                             </p>
                            <input type="text" name="news_id" style="display:none" value="<?= $row->news_id; ?>">
                        </form> 
                        <form action="<?= base_url('commentpost') ?>" method="get">
                            <label for=""><strong>Write Your Comment</strong></label>
                            <textarea name="comment" id="" cols="30" rows="3" class="form-control" style="font-size: 16px"></textarea>
                            <br>
                            <input type="submit" name="post_comment" style="margin-top: -20px" value="Comment" class="float-right btn btn-info pull-right">
                            <input type="text" name="news_id" style="display:none" value="<?= $row->news_id; ?>">
                        </form>
            <?php } ?> 
                        <br><br>
                        <div class="img-thumbnail">
                    <?php foreach($commentquery->result() as $com){ ?>
                        <div class="media img-thumbnail">
                            <div class="media-left">
                                <img src="<?= $com->photo ?>" class=" rounded-circle" style="width:30px">
                            </div>
                            <!-- start comment body -->
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <a href="<?= base_url('view/'.$com->user_id.'/'.url_title($com->fname.$com->lname) )?>"><?= $com->fname.' '.$com->lname; ?> </a> 
                                    <small style="font-size: 10px"><i><?= $com->comment_date?></i></small>
                                    <!--Start comment edit-->
                                    <?php if($com->user_id == $this->session->userdata('user_id')){?>
                                        <small><span  data-toggle="modal" class="fas fa-pen-alt" data-target="#myModal"></span>
                                        <span><a href="<?= base_url('deletecomment/').$row->news_id.'/'.$com->comment_id?>" class="fas fa-trash-alt card-link"></a></span>
                                        </small>
                                        <?php }?>
                                    <!--end comment edit-->
                                </h5>
                                <p><?php echo nl2br($com->comment_news); ?></p> 
                                <?php if($com->comment_update != null){
                                    echo "<p class='' style='font-size:10px'>Edited: <b>".$com->comment_update."</b></p>";
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
                                                    <textarea name="comment" id="" cols="30" rows="3" class="form-control"><?= $com->comment_news?></textarea>
                                                    <input type="text" style="display:none" name="comment_id" value="<?= $com->comment_id?>">
                                                    
                                                    <input type="submit" name="update_comment" value="Update Comment" class="btn  btn-primary">
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