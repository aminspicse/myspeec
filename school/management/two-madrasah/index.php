<?php
	$class = 'Two';
	$title = $class.' (Madrasah)'; 
	include('../elements/simpleheader.php');
	
 ?>	
	 <div class="col-md-2 col-sm-2 col-xs-2 tumbnail" style="height:768px; background:#5ae6f5">
		<h3 id="button1">Entry</h3><hr>
		<h3 id="button2">Update</h3><hr>
		<h3 id="button3">Passed</h3><hr>
		<h3 id="button4">Reffard</h3><hr>
		<h3 id="button5">All Result</h3><hr>
		<h3 id="button6">Result Summary</h3><hr>
		<h3 id="button7" class="text-danger">Delete</h3><hr>
	 </div>
	<div class="col-md-10" id="two" style="display:">
		<div class="row">
			<div class="col-md-10">
				<h2 class="text-center" style="font-size: 3vw"><b><?php echo $ses['school_name']; ?></b></h2>
			</div>
			<div class="col-md-10">
				<p class="text-center" style="font-size: 2vw; margin-top:-11px">Class <?php echo $class.' '.$setting['semester']." Examination ".$setting['year']; ?></p>
			</div>
		</div>
	</div>
	</body>
</html>

<script type="text/javascript">
	$('#button1').click(function(){
		$.ajax({
			url: 'two.php',
			success:function(data){
				$('#two').html(data);
			}
		});
	});
	$('#button2').click(function(){
		$.ajax({
			url: 'search.php',
			success:function(data){
				$('#two').html(data);
			}
		});
	});
	$('#button3').click(function(){
		$.ajax({
			url: 'passed.php',
			success:function(data){
				$('#two').html(data);
			}
		});
	});
	$('#button4').click(function(){
		$.ajax({
			url: 'reffard.php',
			success:function(data){
				$('#two').html(data);
			}
		});
	});
	$('#button5').click(function(){
		$.ajax({
			url: 'all_result.php',
			success:function(data){
				$('#two').html(data);
			}
		});
	});
	$('#button6').click(function(){
		$.ajax({
			url: '../marksheet-others/result_summary_form.php',
			success: function(data){
				$('#two').html(data);
			}
		});
	});
	$('#button7').click(function(){
		$.ajax({
			url: 'search_delete.php',
			success: function(data){
				$('#two').html(data);
			}
		});
	});
</script>
<style type="text/css">
	h3{
		margin:0px;
	}
	hr{
		margin:0px;
	}
</style>