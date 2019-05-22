    <div class="row">
        <div class="col-6">
            <?php foreach($profile->result() as $row){ ?>
                <p class="margin">Full Name</p>
                <h6><b><?= $row->fname.' '.$row->lname?></b></h6>
                <p class="margin">Email</p>
                <p><b><?= $row->username ?></b> <i class="fas fa-globe-europe" title="Public"></i></p>
               
                <?php 
                    if($row->phone != ''){
                        echo '
                        <p class="margin">Phone</p>
                        <p><b>'.$row->phone.'</b> <i class="fas fa-globe-europe" title="Public"></i></p>
                        ';
                    }
                    if($row->gender != ''){
                        echo '<p class="margin">Gender</p>';
                        echo '<p><b>'.$row->gender .'</b> <i class="fas fa-globe-europe" title="Public"></i></p>';
                    }

                    if($row->birth_date != '' && $row->birth_month != '' && $row->birth_year !=''){
                        echo '<p class="margin">Date of Birth</p>';
                        echo '<p><b>'. $row->birth_date.' - '.$row->birth_month.' - '.$row->birth_year.'</b> <i class="fas fa-globe-europe" title="Public"></i></p>';
                    }

                    if($row->present_address != ''){
                        echo '
                            <p class="margin">Lives in</p>
                            <p><b>'.$row->present_address.'</b></p>
                        ';
                    }
                    
                    if($row->permanent_address != ''){
                        echo '
                            <p class="margin">Home</p>
                            <p><b>'.$row->permanent_address.'</b></p>
                        ';
                    }
                ?>
            <?php } ?>
        </div>
        <div class="col-6">
            <?php foreach($education->result() as $edu){?>
                <p><i class="fas fa-graduation-cap"></i> Gradated form <a href=""> <?= $edu->department ?></a> at <a href=""><?= $edu->institute ?></a></p>
            <?php } ?>
            <?php foreach($training->result() as $tra){?>
                <p><i class="fas fa-skull-crossbones"></i> Formar Trainee <a href=""><?= $tra->training_title ?></a> at <a href=""><?= $tra->training_institute ?></a></p>
            <?php } ?>
        </div>
    </div>

</div>
</body>
</html>

<style>
    .margin{
        margin-bottom: 0px;
    }
</style>