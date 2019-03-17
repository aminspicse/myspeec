$(document).ready(function(){
	$('#submit').click(function(){
		var name = $('#name').val();
		var roll = $('#roll').val();
		if(name == '' || roll == ''){
			$('#response').html('<span class="text-danger">Name and Roll are Required</span>');
		}else{
			$.ajax({
				url: "../three-four-madrasah/insert.php",
				method: "POST",
				data: $('#submit_form').serialize(),
				success: function(data){
					$('form').trigger("reset");
					$('#response').fadeIn.html(data);
				}
			});
		}
	});
});