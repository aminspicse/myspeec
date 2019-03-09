<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="content-wrapper">
        <?php foreach($queryindex->result() as $row){ ?>
            <table class="table table-responsive">
                <tr> 
                    <td>Name:</td>
                    <td><?= $row->fname." ".$row->lname ?></td>
                    <td>Profile Link:</td>
                    <td><td><?= base_url('Public_Profile/index/').$row->user_id ?></td></td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td><?= $row->phone ?></td>
                    <td>Country:</td>
                    <td><?= $row->country ?></td>
                </tr>
                <tr>
                    <td colspan="4"><img src="<?php //echo  $row->photo;?>" alt=""></td>
                </tr>
            </table>
        <?php }?>
    </div>
 </body>
</html>