<?php
	include '../elements/simpleheader.php';
	include '../six-eight-madrasah/examname.php';
	
?>
<div class="row text-center" style="font-size: 3vw"><b><?php echo $ses['school_name'] ?></b></div>

<form id="submit_form">
	<div class="row col-md-offset-1">
		<div class="col-md-1">
			<select name="classs" id="classs" class="form-control">
				<option value="Six">Six</option>
				<!--<option value="One">One</option>
				<option value="Play">Play</option>
				<option value="Two">Two</option>
				<option value="Three">Three</option>
				<option value="Four">Four</option>
				<option value="Five">Five</option>
				<option value="Six">Six</option>
				<option value="Seven">Seven</option>
				<option value="Eight">Eight</option>
				<option value="Nine">Nine</option>
				<option value="Ten">Ten</option>
				-->
			</select>
		</div>
		<div class="col-md-2">
			<select name="department" id="department" class="form-control">
				<option value="General">General</option>
				<option value="Science">Science</option>
				<option value="Commerce">Commerce</option>
			</select>
		</div>
		<div class="col-md-2">
			<select name="semester" id="semester" class="form-control">
				<option value="<?php echo $setting['semester']?>"><?php echo $setting['semester']?></option>
				<?php echo semester();?>
			</select>
		</div>
		<div class="col-md-2">
			<select name="year" id="year" class="form-control">
				<option value="<?php echo $setting['year']?>"><?php echo $setting['year']?></option>
				<?php echo year();?>
			</select>
			
			
			
		</div>
		<div class="col-md-2">
			<select name="table" id="table" class="form-control">
				<option value="six_madrasah">six_madrasah</option>
				<option>Select DataTable</option>
			<!--	<option value="play_madrasah">play_madrasah</option>
				<option value="one_madrasah">one_madrasah</option>
				<option value="two_madrasah">two_madrasah</option>
				<option value="three_madrasah">three_madrasah</option>
				<option value="four_madrasah">four_madrasah</option>
				<option value="five_madrasah">five_madrasah</option>
				<option value="six_madrasah">six_madrasah</option>
				<option value="seven_madrasah">seven_madrasah</option>
				<option value="eight_madrasah">eight_madrasah</option>
				<option value="nine_madrasah">nine_madrasah</option>
				<option value="ten_madrasah">ten_madrasah</option>
				-->
			</select>
		</div>
		
		<div class="col-md-1">
			
			<input type="button" name="submit" id="submit" class="btn btn-success" value="Search" />
		</div>
		
	</div>

	<br>
	<div class="row">
		
	</div>
		<input type="text" style="display:none" name="admin_id" value="<?php echo $ses['id']?>" />
		<input type="text" style="display:none" name="school_name" value="<?php echo $ses['school_name']?>" />
		<input type="text" style="display:none" name="institute_logu" value="<?php echo $ses['institute_logu']?>" />
		<input type="date" name="date" class="form-control" style="display:none" />
</form>
<div id="response"></div>
</body>
</html>

<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var classs = $('#classs').val();  
           var department = $('#department').val();  
           if(classs == '' || department == '')  
           {  
                $('#response').html('<span class="text-danger">All Fields are required</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"view_delete.php",  
                     method:"POST",  
                     data:$('#submit_form').serialize(),  
                     beforeSend:function(){  
                          $('#response').html('<span class=" row text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                          $('form').trigger("reset");  
                          $('#response').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#response').fadeOut("slow");  
                          }, 5000000000000000);  
                     }  
                });  
           }  
      });  
 });  
 </script>  