<br><br><br>
<div class="content-wrapper">
<h3>Chating</h3>

    <form action="<?= base_url('Messages/send_mesg')?>" class="container" method="post">
    <?php //foreach($recever->result() as $row):?>
        <div class="row">
            <input type="text" class="form-control" name="message">
            <input type="text" style="display:none" value="9" name="recevers">
            <input type="submit" name="send" class="btn btn-info" value="Send">
        </div>
        

            <img src="<?php// $row->photo; ?>" width="50px" alt="">
<?php// endforeach;?>
    </form>
</div> 

</body>
</html>