        <div class="content-wrapper bg-white">
            <table class="table">
                
                <tr>
                    <td colspan="4" class="text-center text-success" ><?= $this->session->flashdata('msg') ?></td>
                </tr>
            <?php foreach($query->result() as $row) {?>
                <tr>
                    <td><?= $row->news_id ?></td>
                    <td><?= $row->news_title ?><br><?= $row->news_insert_time ?></td>
                    <td><img src="<?= $row->image_link ?>" style="height: 50px; width: 50px" alt=""></td>
                    <td>
                        <a href="<?= base_url('Home/ReadFullNews/').$row->news_id ?>" class="card-link" target="new">View</a>
                        <a href="<?= base_url('MySpeech/edit_post/').$row->news_id ?>" class="card-link text-info" target="new">Edit</a>
                        <a href="<?= base_url('MySpeech/delete_post/').$row->news_id ?>" class="card-link">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </table>
        </div>
    </body>
</html>