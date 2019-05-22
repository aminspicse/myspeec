<div class="row">
        <div class="col-6">
            <?php foreach($experience->result() as $exp) {?>
                <p><i class="fas fa-briefcase"></i> Started Job as <a href=""><?= $exp->job_position ?></a>
                    at <a href=""><?= $exp->company_name.', '.$exp->company_location?></a>
                    <?= 'From '.$exp->from_date.' To '.$exp->to_date?>
                </p>
            <?php } foreach($skills->result() as $skill){?>
                <p><i class="fas fa-book-dead"> </i> Skilled <a href=""><?= $skill->skill_name.$skill->skill_label?></a></p>
            <?php } ?>
        </div>
        <div class="col-6">
            <?php foreach($education->result() as $edu){?>
                <p><i class="fas fa-graduation-cap"></i> Gradated form <a href=""> <?= $edu->department ?></a>
                 at <a href=""><?= $edu->institute ?></a>
                 <?= 'From '.$edu->from_date.' To '.$edu->to_date?>
                </p>
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