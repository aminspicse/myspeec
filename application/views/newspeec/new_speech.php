    <div class="content-wrapper ">
  
        <form action="<?= base_url()?>NewSpeec/Post_Speec" method="POST" enctype= "multipart/form-data" class="container">
        <div><?php //echo validation_errors(); ?></div>
            <div class="row">
                <label for="" class="font-justify"><strong>Speek Titel</strong></label>
                <input type="text" name="post_title" class="form-control" value="<?php //echo form_error('news_title') ?>" placeholder="Speek Your Title">
                <span class="text-danger"><?php //echo form_error('news_title') ?></span>
            </div>
            <div class="row">
                <label for=""><strong>Speek Your First Paragraphs Maximum 5000 Charecter</strong></label>
                <textarea name="news_post_1" id="" cols="140" rows="20" class="form-control"></textarea>

            </div>
            <div class="row" style="display:none">
                <label for=""><strong>Speek Your Second Paragraphs Maximum 1500 Charecter</strong></label>
                <textarea name="news_post_2" id="" cols="140" rows="20" class="form-control"></textarea>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <label for="">Choice a Image: </label>
                    <input type="file" name="image_link" accept="image/*" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="">Provide a Embeded Youtube video URL</label>
                    <input type="url" name="video_link" class="form-control">
                </div>
                <div class="col-md-2 checkbox">
                    <label for="">Privacy </label>
                    <select name="user_privacy" id="" class="form-control">
                        <option value="1">Public</option>
                        <option value="0">Private</option>
                    </select>
                </div> 
                <div class="col-md-2">
                    <br>
                    <input type="submit" name="submit_speec" class="btn btn-success pull-right" value="Published Speec">
                </div> 
            </div>
        </form>
    </div>
</main>
    </body>
</html>