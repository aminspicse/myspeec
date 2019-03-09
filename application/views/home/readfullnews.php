
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
                                
                                <input type="submit" name="likenews" class="btn btn-link card-link" class="fa fa-thumbs-up" value="Like" />
                                <span class="badge"><?= $likes->num_rows(); ?> People Likes</span>
                                
                                <input type="submit" name="dislikenews" class="btn btn-link card-link" value="DisLike" />
                                <span class="badge"> <?= $dislikes->num_rows() ?> People DisLikes</span>
                                <input type="button" value="Comments" class="btn btn-link card-link"> <span class="badge"> <?php echo $commentquery->num_rows();?> People Comments</span>
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
                            <p class="img-thumbnail"> 
                                <a href="<?= base_url('Public_Profile/index/').$com->user_id ?>" class="card-link"><img src="<?= $com->photo ?>" class="rounded-circle" width="20px" height="" alt=""><strong><?= $com->fname.''.$com->lname; ?></strong></a>
                                <?php echo $com->comment_news; ?>
                            </p>
            <?php }?>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>