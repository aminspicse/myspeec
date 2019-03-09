    <div class="content-wrapper ">
  
        <form action="<?= base_url()?>NewSpeec/Post_Speec" method="POST" enctype= "multipart/form-data" class="container">
        <div><?php //echo validation_errors(); ?></div>
            <div class="row">
                <label for="" class="font-justify"><strong>Speek Titel</strong></label>
                <input type="text" name="post_title" class="form-control" value="<?php //echo form_error('news_title') ?>" placeholder="Speek Your Title">
                <span class="text-danger"><?php //echo form_error('news_title') ?></span>
            </div>
            <hr>
            <div class="row">
                <div>
                    <i class="fas fa-align-center"></i>
                    <i class="fas fa-align-justify"></i>
                    <i class="fas fa-align-left"></i>
                    <i class="fas fa-align-right"></i>

                    <i class="fas fa-bold"></i>
                    <i class="fas fa-heading"></i>
                    <i class=" 	fas fa-highlighter"></i>
                    <i class="fas fa-font"></i>
                    <i class="fas fa-italic"></i>
                    <i class=" 	fas fa-link"></i>
                    <i class="fas fa-list"></i>
                    <i class="fas fa-list-alt"></i>
                    <i class="fas fa-list-ol"></i>
                    <i class="fas fa-list-ul"></i>
                    <i class="fas fa-marker"></i>
                    <i class="fas fa-paper-plane"></i>
                    <i class="fas fa-paragraph"></i>
                    <i class="fas fa-paste"></i>
                    <i class="fas fa-print"></i>

                    <i class="fas fa-quote-left"></i>
                    <i class="fas fa-quote-right"></i>
                    <i class="fas fa-redo"></i>

                    <i class="fas fa-redo-alt"></i>
                    <i class="fas fa-strikethrough"></i>
                    <i class="fas fa-subscript"></i>

                    <i class="fas fa-superscript"></i>
                    <i class="fas fa-trash-alt"></i>
                    <i class="fas fa-underline"></i>
                    <i class="fas fa-wrench"></i>
                  <!--
                      all icon 
                      https://www.w3schools.com/icons/fontawesome_icons_webapp.asp
                  -->

                </div>
                
            </div>
            <br>
            <div class="row">
                <textarea name="news_post_1" id="" cols="140" rows="20" class="form-control"></textarea>

            </div>
            <div class="row" style="display:none">
                <label for=""><strong>Speek Your Second Paragraphs Maximum 1500 Charecter</strong></label>
                <textarea name="news_post_2" id="" cols="140" rows="20" font-size="30px" class="form-control"></textarea>
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