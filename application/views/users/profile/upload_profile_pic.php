<div class="content-wrapper bg-white">
    <form action="<?= base_url('changeimage')?>" method="post" enctype="multipart/form-data">
        <div class='form-group'>
            <br>
            
            <h2 class="text-danger"><?= $error ?></h2>
            <label for="" class="text-warning">Chose Your Profile Picture. Max Size=100kb, Max width=300pixel and Max height=500pixel</label>
            
        </div>
        <div class="container">
        <h4><?= $this->session->flashdata('msg') ?></h4>
        <input type="file" name="profileimage">
            <input type="submit" name="submit" class="btn btn-lg btn-info" value="Change Photo">
        </div>
    </form>
</div>
</body>
</html>
