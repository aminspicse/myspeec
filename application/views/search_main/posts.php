
    <?php foreach ($search_posts->result() as $row) { ?>
        <div class="row">
            <div class="col-md-2">
                <img src="<?= $row->image_link ?>" width="100%" alt="">
            </div>
            <div class="col-md-10">
                <h4><a href="<?= base_url('Home/ReadFullNews/').$row->news_id?>"><?= $row->news_title?></a></h4>
                <p><?= $row->news_post_1?></p>
            </div>
        </div>
    <?php }?>
    


</div>

</main>
</body>
</html>