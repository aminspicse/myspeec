<div class="content-wrapper">
    <form action="<?= base_url()?>Profile/Profilepic" method="post" enctype="multipart/form-data">
        <div class='form-group'>
        <br>
            <h4><?= $this->session->flashdata('msg') ?></h4>
            <h2 class="text-danger"><?= $error ?></h2>
            <label for="">Chose Your Profile Pic</label>
            <input type="file" name="profileimage">
            <input type="submit" name="submit" class="btn btn-lg btn-info" value="Change Photo">
        </div>
        <div class="container">
            
        </div>
    </form>
</div>
</body>
</html>