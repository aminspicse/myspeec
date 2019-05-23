<div class="row">
        <div class="col-6">
            <?php foreach($experience->result() as $exp) {
                if($exp->to_date == ''){
                    $to_date = 'Contenue';
                }else{
                    $to_date = $exp->to_date;
                }    
            ?>
                <p><i class="fas fa-briefcase"></i> Started Job as <a href=""><?= $exp->job_position ?></a>
                    at <a href=""><?= $exp->company_name.', '.$exp->company_location?></a>
                    <?= 'From '.$exp->from_date.' To '.$to_date?>
                    <a href="<?= base_url('editexperience/'.$exp->experience_id)?>" title="Edit"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url('deleteexperience/'.$exp->experience_id)?>" title="Delete"><i class="fas fa-minus-circle"></i></a>
                </p>
            <?php } foreach($skills->result() as $skill){?>
                <p><i class="fas fa-book-dead"> </i> Skilled <a href=""><?= $skill->skill_name.$skill->skill_label?></a>
                <a href="<?= base_url('editskill/'.$skill->skill_id)?>" title="Edit"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('deleteskill/'.$skill->skill_id)?>" title="Delete"><i class="fas fa-minus-circle"></i></a>
                </p>
            <?php } ?>
        </div>
        <div class="col-6">
            <?php foreach($education->result() as $edu){?>
                <p><i class="fas fa-graduation-cap"></i> Gradated form <a href=""> <?= $edu->department ?></a>
                 at <a href=""><?= $edu->institute ?></a>
                 <?= 'From '.$edu->from_date.' To '.$edu->to_date?>
                 <a href="<?= base_url('editeducation/'.$edu->education_id)?>" title="Edit"><i class="fas fa-edit"></i></a>
                 <a href="<?= base_url('deleteeducation/'.$edu->education_id)?>" title="Delete"><i class="fas fa-minus-circle"></i></a>
                </p>
            <?php } ?>
            <?php foreach($training->result() as $tran){?>
                <p><i class="fas fa-skull-crossbones"></i> Formar Trainee <a href=""><?= $tran->training_title ?></a> at <a href=""><?= $tran->training_institute ?></a>
                <a href="<?= base_url('edittraining/'.$tran->training_id)?>" title="Edit"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('deletetraining/'.$tran->training_id)?>" title="Delete"><i class="fas fa-minus-circle"></i></a>
                </p>
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