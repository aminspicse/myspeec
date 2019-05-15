
    <?php foreach ($search_posts->result() as $row) { ?>
        <div class="img-thumbnail col-md-6">
            <iframe src="<?= $row->video_link?>" frameborder="0"></iframe>
        </div>
    <?php }?>
    


</div>

</main>
</body>
</html>