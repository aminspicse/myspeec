
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="MD. AL AMIN">
	<title>admin-Pannel</title>
	<link href="management.com/css/bootstrap.css" rel="stylesheet" type="text/css">
	
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
					<a href="management.com/index.php" class="link-card"><h2 class="text-center">Admin Login</h2></a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail">
					<a href="management.com/student login/index.php" class="link-card"><h2 class="text-center">Check Result</h2></a>
				</div>
			</div>
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