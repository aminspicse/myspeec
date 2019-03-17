$(document).ready(function(){
		$flag=1;
    	$("#sname").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_sname").text("* You Must Entired Your School Name!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_sname").text("");

        	}
       });
        $("#email").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_email").text("* You have to enter your User Email!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_email").text("");
        	}
       });
	   $("#password").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_password").text("* You have to enter Your password!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_password").text("");
        	}
       });
	   $("#repassword").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_repassword").text("* Please Re-Enter Your Password!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_repassword").text("");
        	}
       });
	   
        $("#dob").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_dob").text("* You Must Enter Established Date!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_dob").text("");
        	}
       });
        $("#ctype").focusout(function(){
        	$(this).css("border-color", "#2eb82e");
       
       });
        $("#ceo").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_ceo").text("* You Must Entered The Name Head of Institute!");
        	}
        	else
        	{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_ceo").text("");

        	}
        	});
			$("#admin").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_admin").text("* You Must Entered Admin Name in This Software!");
        	}
        	else
        	{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_admin").text("");

        	}
        	});
        $("#phone").focusout(function(){
            $pho =$("#phone").val();
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* You have to enter your Phone Number!");
        	}
        	else if ($pho.length!=11)
        	{   
                    $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* Lenght of Phone Number Should Be Eleven");
        	}
        	else if(!$.isNumeric($pho))
        	{
        	        $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* Phone Number Should Be Numeric");  
        	}
        	else{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_phone").text("");
        	}

    	});  
   		$( "#submit" ).click(function() {
   			if($("#sname" ).val()=='')
   			{
        		$("#sname").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_sname").text("* You Must Entered Your School Name!");
        	}
        	if($("#email" ).val()=='')
   			{
        		$("#email").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_email").text("* You Must Entered a valide Email!");
        	}
			if($("#password" ).val()=='')
   			{
        		$("#password").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_password").text("* You Must Entered a velide password!");
        	}
			if($("#repassword" ).val()=='')
   			{
        		$("#repassword").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_repassword").text("* You Must Re-Entered Yor Valide password!");
        	}
   			if($("#dob" ).val()=='')
   			{
        		$("#dob").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_dob").text("* You Must Entered The Data of Established!");
        	}
   			if($("#ceo" ).val()=='')
   			{
        		$("#ceo").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_ceo").text("* You Must Entered The Name Head of Institute!");
        	}
			if($("#admin" ).val()=='')
   			{
        		$("#admin").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_admin").text("* You Must Entered Admin Name In This Software!");
        	}
        	if($("#phone" ).val()=='')
   			{
        		$("#phone").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_phone").text("* You have to enter your Phone Number!");
        	}
			});


    	
	});