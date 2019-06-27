    <div class="content-wrapper bg-white">
        <br>
        <form action="<?= base_url()?>publish_speec" method="POST" enctype= "multipart/form-data" class="container">
        <div><?php //echo validation_errors(); ?></div>
            <div class="row">
                <input type="text" name="post_title" class="form-control" value="<?= set_value('post_title') ?>" placeholder="Speek Your Title" style="font-size:20px;">
                <span class="text-danger"><?= form_error('post_title') ?></span>
            </div>
            <hr class="hide">
            <div class="row hide"> 
                <div class="col-md-10">
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
                <div class="col-md-2">
                <input type="submit" name="submit_speec" class="btn btn-success pull-right" value="Publish Speec">
                </div>
                
                
            </div>
           <hr class="hide">
            <div class="row">
                <textarea name="news_post_1" id="" cols="50" rows="10" class="form-control"><?= set_value('news_post_1') ?></textarea>

            </div>
            <div class="row" style="display:none">
                <label for=""><strong>Speek Your Second Paragraphs Maximum 1500 Charecter</strong></label>
                <textarea name="news_post_2" id="" cols="140" rows="20" font-size="30px" class="form-control"></textarea>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="">you must select a image >= 1000 kb</label>
                    <div class="input-group ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image_link" accept="image/*" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <label for="">Provide a Embeded Youtube video URL</label>
                    <input type="url" name="video_link" value="<?= set_value('video_link') ?>" class="form-control">
                    <span><?= form_error('video_link') ?></span>
                </div>
                <div class="col-md-2 checkbox">
                    <label for="">Privacy </label>
                    <select name="user_privacy" id="" class="form-control">
                        <option value="1">Public</option>
                        <option value="0">Private</option>
                    </select>
                </div> 

            </div>
            <div class="row min-hide"><!-- show only mobile device--->
                <div class="col-md-2">
                <input type="submit" name="submit_speec" class="btn btn-success pull-right" value="Publish Speec">
                </div>
            </div>
        </form>
    </div>
</main>
    </body>
</html>