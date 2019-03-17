<?php //include 'simpleheader.php'; 
	
	include '../six-eight-madrasah/examname.php'; 
		$user_id = $ses['id'];


		
		//$user_id = $ses['id'];
	if (isset($_POST['nine_insert']) or isset($_POST['nine_update'])) {

		//$user_id = $ses['id'];
		$semester = $_POST['semester'];
		$year = $_POST['year'];

		if (isset($_POST['nine_update'])) {
				$update_setting = "UPDATE setting SET semester = '$semester', year = '$year', user_id='$user_id' WHERE user_id = '$user_id' ";
				$exe = $conn->query($update_setting);
			if($exe){
				$msg['success'] = 'Save Change Successfully';
				echo "Successfull";
				//header('Location:index.php','Successfull Saved');
			}else{
				$msg['error'] = 'Not Save Yeat Please Try Again';
			}
		}

		if(isset($_POST['nine_insert'])){
			$insert_setting = "INSERT INTO setting(user_id, semester, year) VALUES('$user_id', '$semester', '$year')";
			$result = $conn->query($insert_setting);
			//echo var_dump($result);
			if($result){
				$msg['success'] = 'Successfully Saved';
				//header("Location: index.php");
			}else{
				$msg['error'] = 'Not Save Yeat Please Try Again';
			}
		}
	}
	$update = "SELECT * FROM setting WHERE user_id = '$user_id' ";
	$exe = mysqli_query($con, $update);
	$row = mysqli_fetch_array($exe);

?>

 <br><br><br>
<div class="container-fluid" id="setting" style="display:none">
	<h2 class="text-center">Set Default Some Information</h2>
	<form action="" method="post" id="setting_form">
		<div class="row">
			<div class="col-md-10 col-md-offset-2">
				<div class="col-md-4">
					<select name="semester" class="form-control">
						<?php if($row['user_id'] == $user_id){?>
						<option value="<?php echo $row['semester'] ?>"><?php echo $row['semester'] ?></option>
						<?php echo semester();} else{ echo semester();}?>
					</select>
				</div>
				<div class="col-md-4">
					<select name="year" class="form-control">
						<?php if($row['user_id'] == $user_id){ ?>
						<option value="<?php echo $row['year']; ?>"><?php echo $row['year']; ?></option
						<?php echo year();?>
						<?php }else{ echo year(); }?>
					</select>
				</div>
			</div>
		</div>
		<br>
		<?php if ($row['user_id'] == $user_id) {?>
		<div class="row">
			<div class="col-md-3 col-md-offset-8 ">
				<button class="btn btn-success btn-block btn-lg" name="nine_update" id="update">Save Change</button>
			</div>
		</div>
		<?php } else{?>
		<div class="row ">
			<div class="col-md-2 col-md-offset-9 ">
				<button class="btn btn-success btn-block btn-lg" name="nine_insert">Save</button>
			</div>
		</div>
		<?php }?>
		<span id="message"></span>
	</form>
</div>

<script type="text/javascript">
	$("#update").click(function(){
		$.post($("#setting_form").attr("action"),$("#setting_form:input").serializeArray(),function(setting){$("#message").html(setting);});
	)};
</script>


