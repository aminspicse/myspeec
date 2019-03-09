<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<div class="content-wrapper">
            <?php foreach($queryindex->result() as $rows){?>
            <div class="row" style="bg-color: red">
                <img src="<?= $rows->photo;?>" style="width: 100%; height: 100px" alt="">
                <div class="col-md-2"><img src="<?= $rows->photo;?>" style="margin-top: -100px; width: 100px" alt=""></div>
            </div>
            <?php }?>
            <div class="row bg-default">
                <div class="col-md-2 col-xs-4">
                    <a href="" class="card-link">About</a>
                </div>
                <div class="col-md-2 col-xs-4">
                    <a href="" class="card-link">Posts</a>
                </div>
                <div class="col-md-2 col-xs-4">
                    <a href="" class="card-link">WorkPlace</a>
                </div>
            </div>
</div>