<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// old activities
?>
<div class="content-wrapper bg-white">
    <div class="row ">
        <div class="col-12">
        <h2 class="text-center text-success">Login Activities</h2>
        </div>
    </div>
    <?php foreach($login_query->result() as $row){ ?>
        <div class="row  ">
            <div class="col-12">
                <p>
                    <?= $row->mobile.', '. $row->os.', '. $row->browser. ', '.$row->agent_string.',<b> '.$row->try_time.'</b>,'.$row->country.', '.$row->city ?>
                    <?php 
                    if($row->accuracy == 1){
                        echo "<a class='text-success'> Correct Password</a>";
                    }else{
                        echo "<a href=".base_url('ChangePassword')." class='text-danger'> Someone try to Biolate your Password</a>";
                    }
                    ?>
                </p>
                <strong>Referreral Link:</strong> <a href="<?=$row->referrer?>"><?= $row->referrer?></a>
                
            </div>
        </div>
        <hr>
    <?php } ?>
</div>

</body>
</html>