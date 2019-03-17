<?php 

	include'header.php';
	include'leftnavbar.php';
	include '../nine-madrasah/query_function.php';
	include'dashboard.php';
	include'dashboard_play.php';
	include'dashboard_nursary.php';
	include'dashboard_one.php';
	include'dashboard_two.php';
	include'dashboard_three.php';
	include'dashboard_four.php';
	include'dashboard_five.php';
	include'dashboard_six.php';
	include'dashboard_seven.php';
	include'dashboard_eight.php';
	include'dashboard_nine.php';
	include'dashboard_ten.php';
	include'profile.php';
	include'setting.php';
	include'activitylog.php';

?>
<script type="text/javascript">
	function play(){
		var play = document.getElementById('play').innerHTML;
		document.getElementById('right-container').innerHTML = play;
	}
	function nursary(){
		var nursary = document.getElementById('nursary').innerHTML;
		document.getElementById('right-container').innerHTML = nursary;
	}
	function one(){
		var one = document.getElementById('one').innerHTML;
		document.getElementById('right-container').innerHTML = one;
	}
	function two(){
		var two = document.getElementById('two').innerHTML;
		document.getElementById('right-container').innerHTML = two;
	}
	function three(){
		var three = document.getElementById('three').innerHTML;
		document.getElementById('right-container').innerHTML = three;
	}
	function four(){
		var four = document.getElementById('four').innerHTML;
		document.getElementById('right-container').innerHTML = four;
	}
	function five(){
		var five = document.getElementById('five').innerHTML;
		document.getElementById('right-container').innerHTML = five;
		var madrasahs = document.getElementById('madrasahs').innerHTML;
		var madrasah = document.getElementById('madrasah').innerHTML;
		if(madrasahs == true){
			document.getElementById('content').innerHTML = madrasah;
		}else{
			
		}
	}
	function six(){
		var six = document.getElementById('six').innerHTML;
		document.getElementById('right-container').innerHTML = six;
	}
	function seven(){
		var seven = document.getElementById('seven').innerHTML;
		document.getElementById('right-container').innerHTML = seven;
	}
	function eight(){
		var eight = document.getElementById('eight').innerHTML;
		document.getElementById('right-container').innerHTML = eight;
	}
	function nine(){
		var nine = document.getElementById('nine').innerHTML;
		document.getElementById('right-container').innerHTML = nine;
	}
	function ten(){
		var ten = document.getElementById('ten').innerHTML;
		document.getElementById('right-container').innerHTML = ten;
	}
	function profile(){
		var profile = document.getElementById('profile').innerHTML;
		document.getElementById('right-container').innerHTML = profile;
	}
	function setting(){
		var setting = document.getElementById('setting').innerHTML;
		document.getElementById('right-container').innerHTML = setting;
	}
	function activity(){
		var activity = document.getElementById('activity').innerHTML;
		document.getElementById('right-container').innerHTML = activity;
	}
</script>
