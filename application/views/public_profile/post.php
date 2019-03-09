<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

        <div class="content-wrapper">
            <table class="table">
                <?php foreach($querypost->result() as $row){?>
                    <tr>
                        <td><img src="<?= $row->image_link ?>" width="100px" alt=""></td>
                        <td> 
                        <a href="<?= base_url('Home/ReadFullNews/').$row->news_id ?>" target="new"><?= $row->news_title ?></a>
                            <p>Post on: <?= $row->news_insert_time ?></p>
                        </td>
                    </tr>
                <?php }?>
            </table>
        </div>
    </body>
</html>