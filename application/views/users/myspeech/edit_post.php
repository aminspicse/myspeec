<div class="content-wrapper bg-white">
   <br>
  <form action="<?= base_url('updatepost')?>" method="POST" enctype= "multipart/form-data" class="container">
  <div class="row col-md-12"><p class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></p></div>
  <?php foreach($query->result() as $row):?>
      <div class="row">
          <input type="text" name="post_title" class="form-control" value="<?php echo $row->news_title; ?>" placeholder="Speek Your Title">
          <span class="text-danger"><?php //echo form_error('news_title') ?></span>
      </div>
      <hr>
        <div class="row"> 
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
                <input type="submit" name="update_speec" class="btn btn-info pull-right" value="Update Speec">
            </div>    
        </div>
           <hr>
      <div class="row">
          <textarea name="news_post_1" id="" cols="140" rows="8" class="form-control"><?= $row->news_post_1 ?></textarea>
      </div>
       
      <div class="row">

        <input type="text" name="news_id" style="display:none" value="<?= $row->news_id ?>">
          <div class="col-md-6">
              <label for="">Provide a Embeded Youtube video URL</label>
              <input type="url" name="video_link" value="<?= $row->video_link ?>" class="form-control">
          </div>
          <div class="col-md-2 checkbox">
              <label for="">Profile Privacy </label>
              <select name="user_privacy" id="" class="form-control">
                  <option value="1">Public</option>
                  <option value="0">Private</option>
              </select>
          </div> 
          <div class="col-md-2">
                <label for="">Post Privacy</label>
                <select name="post_privacy" id="" class="form-control">
                    <option value="1">Public</option>
                    <option value="0">Private</option>
                </select>
          </div> 
      </div>
<?php endforeach; ?>
  </form>
</div>
</main>
</body>
</html>