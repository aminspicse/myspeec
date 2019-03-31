
    <?php foreach ($search_posts->result() as $row) { ?>
        <div class="row img-thumbnail col-md-12">
            <div class="col-md-2"> 
                <img src="<?= $row->image_link ?>" width="100%" height="100px" alt=" ">
            </div>
            <div class="col-md-10">
                <h4><a href="<?= base_url('Home/ReadFullNews/').$row->news_id?>"><?= $row->news_title?></a></h4>
                <p><?php  trim(substr($row->news_post_1,0,200))?></p>
            </div>
        </div>
    <?php }?>
    


</div>

</main>
</body>
</html>