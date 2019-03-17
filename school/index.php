
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Landing Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="MD. AL AMIN">
	
	<link href="management/css/bootstrap.css" rel="stylesheet" type="text/css">
	
</head>
<body class="bg-light">
	<div class="container-fluid">
		<br><br><br><br><br><br><br>
		<div class="row">
			<h3 class="text-center">School Management System Bangladesh<h3>
		</div>

		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<div class="thumbnail">
					<a href="management/index.php" class="link-card"><h2 class="text-center">Admin Login</h2></a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail">
					<a href="management/student login/index.php" class="nav-link"><h2 class="text-center">Check Result</h2></a>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <p><b>School Management is a free digital School managing system</b></p>
                <p>if you are interested for using this software then please create an account <a href="https://amincse.blogspot.com/2018/07/account-create-of-school-management.html">How to Create an account</a></p>
                <h3 class="text-warning">Free Login Email: admin@sms.com  Password: admin</h3>
                <h4 class="text-success">If any complain or query: Email: aminspicse@gmail.com, Mobile: +880 1689-015612</h4>
                <p>Developed by: <a href="https://www.facebook.com/webtecbd/" target="_new">Web Tech BD</a></p>
            </div>
            <div class="col-md-3"></div>
        </div>

<script>
$(document).ready(function(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $.ajax({
        type:'POST',
        url:'getLocation.php',
        data:'latitude='+latitude+'&longitude='+longitude,
        success:function(msg){
            if(msg){
               $("#location").html(msg);
            }else{
                $("#location").html('Not Available');
            }
        }
    });
}
</script>
<?php
if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    //send request and receive json data by latitude and longitude
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
    
    //if request status is successful
    if($status == "OK"){
        //get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  '';
    }
    
    //return address to ajax 
    echo $location;
}
?>
		
	</div>
</body>	