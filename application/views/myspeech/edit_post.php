<div class="content-wrapper ">
   
  <form action="<?= base_url()?>MySpeech/update_post" method="POST" enctype= "multipart/form-data" class="container">
  <div><?php echo $this->session->flashdata('msg'); ?></div>
  <?php foreach($query->result() as $row):?>
      <div class="row">
          <label for="" class="font-justify"><strong>Speek Titel</strong></label>
          <input type="text" name="post_title" class="form-control" value="<?php echo $row->news_title; ?>" placeholder="Speek Your Title">
          <span class="text-danger"><?php //echo form_error('news_title') ?></span>
      </div>
      <div class="row">
          <label for=""><strong>Speek Your First Paragraphs Maximum 500 Charecter</strong></label>
          <textarea name="news_post_1" id="" cols="140" rows="8" class="form-control"><?= $row->news_post_1 ?></textarea>

      </div>
      <div class="row">
          <label for=""><strong>Speek Your Second Paragraphs Maximum 1500 Charecter</strong></label>
          <textarea name="news_post_2" id="" cols="140" rows="10" class="form-control"><?= $row->news_post_2 ?></textarea>
      </div>

      <div class="row">
       <!--   <div class="col-md-2">
              <label for="">Choice a Image: </label>
              <input type="file" name="image_link" accept="image/*" class="form-control">
          </div>
        -->
        <input type="text" name="news_id" style="display:none" value="<?= $row->news_id ?>">
          <div class="col-md-6">
              <label for="">Provide a Embeded Youtube video URL</label>
              <input type="url" name="video_link" value="<?= $row->video_link ?>" class="form-control">
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
              <input type="submit" name="update_speec" class="btn btn-success btn-lg pull-right" value="Update Speec">
          </div> 
      </div>
<?php endforeach; ?>
  </form>
</div>
</main>
</body>
</html>