<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 

        <div class="content-wrapper">
            <table class="table">
                <?php foreach($allspeaker->result() as $row){?>
                    <tr>
                        <td><a href="<?= base_url('Public_Profile/index/').$row->user_id ?>"><img src="<?= $row->photo; ?>" width="40px" alt=""></a></td>
                        <td><a href="<?= base_url('Public_Profile/index/').$row->user_id ?>"><?= $row->fname.' '.$row->lname; ?></a></td>
                        <td><a href="">Send Message</a></td>
                        <td><a href="<?= base_url('MakeFriend/friend_request/').$row->user_id ?>"><?php 
                            $qry = $this->MakeFriend_Model->friend_filter($this->session->userdata('user_id'), $row->user_id);
                            if($qry->num_rows()>0){
                                echo "Connected";
                            }else{
                                echo "Connect";
                            }
                        ?></a></td>
                    </tr>
                <?php }?>
            </table>

        </div>

    </body>
</html>
