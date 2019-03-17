<?php 

	$class = 'Five';
	$title = $class.' (Madrasah)';
	include '../elements/simpleheader.php';
	include '../one-five-madrasah/examname.php';
	$session_user = $_SESSION['user'];
 ?>
		<div class="row">
			<div class="col-md-11 col-md-offset-1">
				<h2 class="text-center pra" style="font-size: 3vw"><b><?php echo $ses['school_name']; ?></b></h2>
			</div>
			<div class="col-md-11 col-md-offset-1">
				<p class="text-center pra" style="font-size: 2vw">Class <?php echo $class.' '.$setting['semester']." Examination ".$setting['year']; ?></p>
			</div>
		</div>

		<form class="form-inline container-fluid" id="submit_form">
			

			<?php include 'subject.php'; ?>
			<input type="text" style="display:none" name="admin_id" value="<?= $session_user['id'] ?>" />
		</form>
	</body>
</html>

<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var roll = $('#roll').val();  
           if(name == '' || roll == '')  
           {  
                $('#response').html('<span class="text-danger">All Fields are required</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
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
                          }, 5000);  
                     }  
                });  
           }  
      });  
 });  
 </script>  