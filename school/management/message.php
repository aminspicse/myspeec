<?php if(isset($msg['error'])){ ?>
<div class="alert alert-danger">
		<?php echo $msg['error']; ?>
</div>
<?php } ?>


<?php if(isset($msg['success'])){ ?>
<div class="alert alert-success">
		<?php echo $msg['success']; ?>
</div>
<?php } ?>