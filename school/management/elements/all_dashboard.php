<?php 
	//php include'query.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header ('Location:../index.php');
	}
	include '../config/db_connection.php';
	
	$ses = $_SESSION['user'];
	//$sesid = $_SESSION['id'];
	
	//$sql = "SELECT * FROM class_nine WHERE user_id = $sesid";
	//$exe = mysqli_query($con, $sql);
	//$count = mysqli_num_rows($exe);
	include '../class_six_school/query_function.php'; 
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="author" content="MD. AL AMIN">
		  <title>admin-Pannel</title>
		  <link rel="stylesheet" href="dashboard.css" />
		  <link rel="icon" type="text/css" href="image/band5.png">
		  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
		  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		  <link href="../css/style.css" rel="stylesheet" type="text/css">
		  <link href="../css/admin.css" rel="stylesheet" type="text/css">
		  <script src="../js/07b0ce5d10.js"></script>
		  <script src="../js/jquery.js"></script>
		  <script src="../js/jquery3.1.1.js"></script>
		  <script src="../js/bootstrap.min.js"></script>
	</head>

	<body>
	  <!--=============================
												 NAVIGATION
									   =============================-->
	  <!--top nav start=======-->
	    <nav class="navbar navbar-inverse top-bar navbar-fixed-top">
			<div class="container-fluid">
			    <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button> <span class="menu-icon" id="menu-icon"><i class="fa fa-times" aria-hidden="true" id="chang-menu-icon"></i></span>
					<a class="navbar-brand" href="index.php"><img src="image/band5.png" width="150" height="40" class=""> </a>
			    </div>
			  
				<div class="collapse navbar-collapse navbar-right" id="myNavbar">
					<form class="navbar-form navbar-left" name="form1" action="" method="">
					    <div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="search">
							<div class="input-group-btn">
							  <button class="btn btn-default" type="submit" name="search1">
							  <i class="glyphicon glyphicon-search"></i> </button>
							</div>
					    </div>
					</form>
					<ul class="nav navbar-nav"> 
					  <li class=""><a href=""><i class="fa fa-refresh"></i> Refreash</a> </li>
					  <li class=""><a href="#"><i class="fa fa-volume-up"></i></a> </li>
					  <li class=""><a href="#"><i class="fa fa-envelope"></i> <span class="badge">5</span></a> </li>
					  <li class=""><a href="#"><i class="fa fa-bell"></i> <span class="badge">9</span></a> </li>
					  <li class="">
						<a href="#" class="user-profile"> <span class=""><?php echo'<img class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($ses['institute_head'] ).'">'?></span> </a>
					  </li>
					  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $ses['admin_name']?>
					   <span class="caret"></span></a>
						<ul class="dropdown-menu">
						  <li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li>
						  <li> <a href="setting.php"><i class="fa fa-cog"></i> Setting</a> </li>
						  <li> <a href="../logout.php"><i class="fa fa-power-off"></i> Logout</a> </li>
						</ul>
					  </li>
					</ul>
				</div>
			</div>
	    </nav>
	  <!--    top nav end===========-->
	  
		<div class="left-container" id="left-container">
		  <!-- begin SIDE NAV USER PANEL -->
		    <div class="left-sidebar" id="show-nav">
				<ul id="side" class="side-nav">
				    <li class="panel">
						<a id="panel1" href="javascript:;" data-toggle="collapse" data-target="#Dashboard"> <i class="fa fa-dashboard"></i> Dashboard
						  <i class="fa fa-chevron-left pull-right" id="arow1"></i> </a>
						<ul class="collapse nav" id="Dashboard">
							<li onclick="five()"><a><i class="fa fa-angle-double-right"></i> Class Five</a></li>
							<li onclick="six()"> <a><i class="fa fa-angle-double-right"></i> Class Six</a> </li>
							<li onclick="seven()"> <a><i class="fa fa-angle-double-right"></i>Class Seven </a> </li>
							<li onclick="eight()"> <a><i class="fa fa-angle-double-right"></i>Class  Eight</a> </li>
							<li onclick="nine()"> <a><i class="fa fa-angle-double-right"></i>Class  Nine</a> </li>
							<li onclick="ten()"> <a><i class="fa fa-angle-double-right"></i>Class  Ten</a> </li>
							<li> <a href=""><i class="fa fa-angle-double-right"></i>Teachers</a> </li>
						</ul>
				    </li>
				    <li class="panel">
						<a id="panel2" href="javascript:;" data-toggle="collapse" data-target="#charts"> <i class="fa fa-bar-chart-o"></i> Charts
						  <i class="fa fa-chevron-left pull-right" id="arow2"></i> </a>
						<ul class="collapse nav" id="charts">
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Student</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Teachers</a> </li>
						</ul>
				    </li>
					<li class="panel">
						<a id="panel20" href="javascript:;" data-toggle="collapse" data-target="#admission"> <i class="fa fa-address-book"></i> Admission
						  <i class="fa fa-chevron-left pull-right" id="arow20"></i> </a>
						<ul class="collapse nav" id="admission">
						  <li> <a href="../admission/admission_form.php" target="_new"><i class="fa fa-angle-double-right text-info"></i> Take Admission</a> </li>
						  <li> <a href="../admission/view_admission.php"  target="_new"><i class="fa fa-angle-double-right"></i>View Admission</a> </li>
						  
						</ul>
					</li>
				    <li class="panel">
						<a id="panel3" href="javascript:;" data-toggle="collapse" data-target="#calendar"> <i class="fa fa-plus-circle"></i> Result Entry
						  <span class="label label-danger">new event</span> <i class="fa fa-chevron-left pull-right" id="arow3"></i> </a>
						<ul class="collapse nav" id="calendar">
						    <li> <a href="../class_six_school/class_six.php" target="_new"><i class="fa fa-angle-double-right"></i> Class Six</a> </li>
						    <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Seven</a> </li>
						    <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Eight</a> </li>
						    <li> <a href="../class_nine/nine.php" target="_blank"><i class="fa fa-angle-double-right" name="nine"></i> Class Nine</a> </li>
						    <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Ten</a> </li>
						</ul>
				    </li>
					<li class="panel">
						<a id="panel4" href="javascript:;" data-toggle="collapse" data-target="#clipboard"> <i class="fa fa-wifi"></i> Published Result
						  <i class="fa fa fa-chevron-left pull-right" id="arow4"></i> </a>
						<ul class="collapse nav" id="clipboard">
							<li> <a href="#"><i class="fa fa-angle-double-right"></i>Class Six</a> </li>
							<li> <a href="#"><i class="fa fa-angle-double-right"></i>Class Seven</a> </li>
							<li> <a href="#"><i class="fa fa-angle-double-right"></i>Class Eight</a> </li>
							<li> <a href="../class_nine/all_status.php" target="_blank"><i class="fa fa-angle-double-right"></i>Class Nine</a> </li>
							<li> <a href="#"><i class="fa fa-angle-double-right"></i>Class Ten</a> </li>
						</ul>
					</li>
				    <li class="panel">
						<a id="panel5" href="javascript:;" data-toggle="collapse" data-target="#edit"> <i class="fa fa-book"></i> Routin & Sylabes
						  <i class="fa fa fa-chevron-left pull-right" id="arow5"></i>
						</a>
						<ul class="collapse nav" id="edit">
						  <li> <a href="../routin/class_routin.php" target="_blank"><i class="fa fa-angle-double-right"></i>Make Routin</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i>Sylebas</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i>Print Routin</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i>Print Sylebas</a> </li>
						</ul>
				    </li>
				    <li class="panel">
						<a id="panel6" href="javascript:;" data-toggle="collapse" data-target="#inbox"> <i class="fa fa-id-card"></i> ID Card
						  <span class="label label-primary">new msz</span> <i class="fa fa fa-chevron-left pull-right" id="arow6"></i> </a>
						<ul class="collapse nav" id="inbox">
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Six</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Seven</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Eight</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Nine</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Ten</a> </li>
						</ul>
				    </li>
				    <li class="panel">
						<a id="panel7" href="javascript:;" data-toggle="collapse" data-target="#cogs"> <i class="fa fa-credit-card"></i> Payments
						  <span class="label label-warning">Warning</span> <i class="fa fa fa-chevron-left pull-right" id="arow7"></i> </a>
						<ul class="collapse nav" id="cogs">
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Six</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Seven</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Eight</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Nine</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Ten</a> </li>
						</ul>
				    </li>
				    <li class="panel">
						<a id="panel8" href="javascript:;" data-toggle="collapse" data-target="#paper"> <i class="fa fa-file-word-o"></i> Marksheet
						  <i class="fa fa fa-chevron-left pull-right" id="arow8"></i> </a>
						<ul class="collapse nav" id="paper">
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i>Class Six</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i>Class Seven</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i>Class Eight </a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i>Class Nine </a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i>Class Ten </a> </li>
						</ul>
				    </li>
				    <li class="panel">
						<a id="panel9" href="javascript:;" data-toggle="collapse" data-target="#trash"> <i class="fa fa-trash"></i> Trash
						  <i class="fa fa fa-chevron-left pull-right" id="arow9"></i>
						</a>
						<ul class="collapse nav" id="trash">
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Six</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Seven</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Eight</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Nine</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Ten</a> </li>
						</ul>
				    </li>
				    <li class="panel">
						<a id="panel10" href="javascript:;" data-toggle="collapse" data-target="#btc">
						  <i class="fa fa-btc"></i> paper
						  <i class="fa fa fa-chevron-left pull-right" id="arow10"></i>
						</a>
						<ul class="collapse nav" id="btc">
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Six</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Seven</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Eight</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Nine</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Ten</a> </li>
						</ul>
				    </li>
				    <li class="panel">
						<a id="panel11" href="javascript:;" data-toggle="collapse" data-target="#pie-Chart">
						  <i class="fa fa-bar-chart"></i> Chart
						  <span class="label label-success">Supper</span> <i class="fa fa fa-chevron-left pull-right" id="arow11"></i> </a>
						<ul class="collapse nav" id="pie-Chart">
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Six</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Seven</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Eight</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Nine</a> </li>
						  <li> <a href="#"><i class="fa fa-angle-double-right"></i> Class Ten</a> </li>
						</ul>
				    </li>
				</ul>
		    </div>
		</div>
		<!-- END SIDE NAV USER PANEL -->
		
		<!-- Start Dashboard Section-->
		<div id="dashboard">
			<div class="right-container" id="right-container">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<ul class="breadcrumb">
								<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
								<li class="active">Dashboard</li>
							</ul>
						</div>
						<div class="col-md-8">
							<ul class="list-inline pull-right mini-stat">
								<li>
									<h5>Total Student <span class="stat-value color-blue"><i class="fa fa-plus-circle"></i><?php echo $ses['total_student'] ?></span></h5>
								</li>
								<li>
									<h5>Mail <span class="stat-value color-green"><i class="fa fa-plus-circle"></i> 2,500</span></h5>
								</li>
								<li>
									<h5>Femail <span class="stat-value color-orang"><i class="fa fa-plus-circle"></i> 5,500</span></h5>
								</li>
							</ul>
						</div>
					</div>
					<div class="row container-fluid">
						<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
							<div class="main-header">
								<em>The first priyority information</em>
								<h4><?php echo $ses['school_name']?></h4>
							</div>
						</div>
					</div>
					<div class="row padding-top">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6"><img src="https://www.amcharts.com/wp-content/uploads/2016/03/demo_6559_light-1.jpg" class="img-responsive"></div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6"><img src="https://www.amcharts.com/wp-content/uploads/2013/12/demo_7404_light.jpg" class="img-responsive"></div>              
					</div>
					<div class="row padding-top">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6"><img src="https://www.amcharts.com/wp-content/uploads/2013/12/demo_7406_light.jpg" class="img-responsive"></div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6"><img src="https://www.amcharts.com/wp-content/uploads/2013/12/demo_7403_light.jpg" class="img-responsive"></div>              
					</div>
				</div>
			</div>
		</div>
		<!-- End Dashboard Section-->
		<!-- Start Class Five Dashboard -->
		<div class="" id="five" style="display:none">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<ul class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="">Five</a></li>
							<li class="active">Class Five Home Page</li>
						</ul>
					</div>
					<div class="col-md-8">
						<ul class="list-inline pull-right mini-stat">
							<li>
								<h5>Total Student <span class="stat-value color-blue"><i class="fa fa-plus-circle"></i> <?php echo $total ?></span></h5>
							</li>
							<li>
								<h5>Mail <span class="stat-value color-green"><i class="fa fa-plus-circle"></i> 2,500</span></h5>
							</li>
							<li>
								<h5>Femail <span class="stat-value color-orang"><i class="fa fa-plus-circle"></i> 5,500</span></h5>
							</li>
						</ul>
					</div>
				</div>
					
						<div class="row container-fluid">
							<div class="col-md-12">
								<div class="main-header">
									<em>The dashboard of class Six</em>
									<h2><?php echo $ses['school_name']?></h2>
								</div>
							</div>
						</div>
						<form action="" method="post">
							<div class="row  thumbnail">
								<div class="">
									<div class="col-md-4 ">
										<h4 class="margin">Select Your Institute Type</h4>
									</div>
									<div class="col-md-3 ">
										<h4 class="margin"><input type="checkbox" class="" name="school" value="School" onclick="selected('school', this)">School</h4>
									</div>
									<div class="col-md-3 ">
										<h4 class="margin"><input type="checkbox" class="" name="madrasah" onclick="selected('madrasah', this)">Madrasah</h4>
									</div>
									<div class="col-md-2 ">
										<h4 class="margin"><input type="checkbox" class="" name="other" onclick="selected('other', this)">Other</h4>
									</div>
								</div>
							</div>
						</form>
						<div id="school" style="display: none;">
							<div class="thumbnail tumb-set" style="background:#dff0d8">
								<div class="row text-center">
									<h4 class="margin">Result Management <small>for School</small></h4>
								</div>
								<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
									<div class="col-md-2 col-sm-3 col-lg-3">
										<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
											Entry Update
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="" class="" target="_blank">Mark Entry</a></li>
											<li><a href="" class="" target="_blank">Mark Update</a></li>
											<li><a href="" class="" target="_blank">Delete</a></li>
										</ul>
									</div>
									<div class="col-md-2 col-sm-3 ">
										<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
											Result Query
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#" class="" target="_blank">Passed</a></li>
											<li><a href="#" class="" target="_blank">Reffard</a></li>
											<li><a href="#" class="" target="_blank">All Status</a></li>
										</ul>
									</div>    
									<div class="col-md-2 col-sm-3">
										<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
											Reporting
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="#" class="" target="_blank">Marksheet</a></li>
											<li><a href="#" class="" target="_blank">Testimonial</a></li>
											<li><a href="#" class="" target="_blank">T.C</a></li>
										</ul>
									</div>  
									<div class="col-md-2 col-sm-3">
										<button class="btn toggle-button" type="button" data-toggle="dropdown">
											Admission
											<span class="caret"></span>
										</button>
									</div>
									<div class="col-md-2 col-sm-3">
										<button  class="btn toggle-button" type="button" data-toggle="dropdown">
											Fees Collection
											<span class="caret"></span>
										</button>
									</div>
								</div>
							</div>
						</div>
						
						<div id="madrasah" style="display: none;">
							<div class="thumbnail tumb-set" style="background:#f3e7d9">
								<div class="row text-center">
									<h4 class="margin">Result Management <small>for Madrasah</small></h4>
								</div>
								<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
									<div class="col-md-2 col-sm-3 col-lg-3">
										<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
											Entry Update
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="../five-madrasah/five.php" target="_blank" class="">Mark Entry</a></li>
											<li><a href="../one-five-madrasah/search_update.php" target="_blank" class="">Mark Update</a></li>
											<li><a href="#" target="_blank" class="">Delete</a></li>
										</ul>
									</div>
									<div class="col-md-2 col-sm-3 ">
										<button class="btn btn-info toggle-button" type="button" data-toggle="dropdown">Result Query
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="../five-madrasah/passed.php" target="_blank">Passed</a></li>
											<li><a href="../five-madrasah/reffard.php" target="_blank">Reffard</a></li>
											<li><a href="../five-madrasah/all_result.php" target="_blank">All Status</a></li>
											<li></li>
										</ul>
									</div>    
									<div class="col-md-2 col-sm-3">
										<button class="btn btn-primary toggle-button" type="button" data-toggle="dropdown">Reporting
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="../five-madrasah/marksheet.php" target="_blank">Marksheet</a></li>
											<li><a href="" target="_blank">Tesimonial</a></li>
											<li><a href="" target="_blank">T.C</a></li>
										</ul>
									</div>        
									<div class="col-md-2 col-sm-3">
										<button class="btn toggle-button " type="button" data-toggle="dropdown">Admission
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="" target="_blank">Student List</a></li>
										</ul>
									</div>  
									<div class="col-md-2 col-sm-3">
										<button class="btn toggle-button " type="button" data-toggle="dropdown">Fees Collection
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li><a href="" target="_blank">Admission Fee</a></li>
											<li><a href="" target="_blank">Montly Fee</a></li>
											<li><a href="" target="_blank">Exam Fee</a></li>
										</ul>
									</div>             
								</div>
							</div>
						</div>
				<div id="other" style="display: none;">
					<h2 class="text-center"> Please Waite Comming Soon</h2>
				</div>
			</div>
		</div>
		<!-- End Five Dashboard -->
		
		
		<!--Start Six Dashboard -->
		<div class="right-container" id="six" style="display:none">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<ul class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="">Six</a></li>
							<li class="active">Class Six Home Page</li>
						</ul>
					</div>
					<div class="col-md-8">
						<ul class="list-inline pull-right mini-stat">
							<li>
								<h5>Total Student <span class="stat-value color-blue"><i class="fa fa-plus-circle"></i> <?php echo $total ?></span></h5>
							</li>
							<li>
								<h5>Mail <span class="stat-value color-green"><i class="fa fa-plus-circle"></i> 2,500</span></h5>
							</li>
							<li>
								<h5>Femail <span class="stat-value color-orang"><i class="fa fa-plus-circle"></i> 5,500</span></h5>
							</li>
						</ul>
					</div>
				</div>
				<div class="row container-fluid">
					<div class="col-md-12">
						<div class="main-header">
							<em>The dashboard of class Six</em>
							<h2><?php echo $ses['school_name']?></h2>
						</div>
					</div>
				</div>
				<form action="" method="post">
					<div class="row  thumbnail" style="background:#ddd">
						<div class="">
							<div class="col-md-4 ">
								<h4 class="margin">Select Your Institute Type</h4>
							</div>
							<div class="col-md-3 ">
								<h4 class="margin"><input type="checkbox" class="" name="school" value="School" onclick="selected('school', this)">School</h4>
							</div>
							<div class="col-md-3 ">
								<h4 class="margin"><input type="checkbox" class="" name="madrasah" onclick="selected('madrasah', this)">Madrasah</h4>
							</div>
							<div class="col-md-2 ">
								<h4 class="margin"><input type="checkbox" class="" name="other" onclick="selected('other', this)">Other</h4>
							</div>
						</div>
					</div>
				</form>
				<!-- School Six-->
				<div id="school" style="display: none;">
					<div class="thumbnail tumb-set" style="background:#dff0d8">
						<div class="row text-center">
							<h4 class="margin">Result Management <small>for School</small></h4>
						</div>
						<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
							<div class="col-md-2 col-sm-3 col-lg-3">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" class="" target="_blank">Mark Entry</a></li>
									<li><a href="" class="" target="_blank">Mark Update</a></li>
									<li><a href="" class="" target="_blank">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_blank">Passed</a></li>
									<li><a href="#" class="" target="_blank">Reffard</a></li>
									<li><a href="#" class="" target="_blank">All Status</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_blank">Marksheet</a></li>
									<li><a href="#" class="" target="_blank">Testimonial</a></li>
									<li><a href="#" class="" target="_blank">T.C</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button" type="button" data-toggle="dropdown">
									Admission
									<span class="caret"></span>
								</button>
							</div>
							<div class="col-md-2 col-sm-3">
								<button  class="btn toggle-button" type="button" data-toggle="dropdown">
									Fees Collection
									<span class="caret"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<div id="madrasah" style="display: none;">
					<div class="thumbnail tumb-set" style="background:#f3e7d9">
						<div class="row text-center">
							<h4 class="margin">Result Management <small>for Madrasah</small></h4>
						</div>
						<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
							<div class="col-md-2 col-sm-3 col-lg-3">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../six-madrasah/six.php" target="_blank" class="">Mark Entry</a></li>
									<li><a href="../six-eight-madrasah/search_update.php" target="_blank" class="">Mark Update</a></li>
									<li><a href="#" target="_blank" class="">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn btn-info toggle-button" type="button" data-toggle="dropdown">Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../six-madrasah/passed.php" target="_blank">Passed</a></li>
									<li><a href="../six-madrasah/reffard.php" target="_blank">Reffard</a></li>
									<li><a href="../six-madrasah/all_result.php" target="_blank">All Status</a></li>
									<li Class="divider"></li>
									<li><a href="">Passed (pdf)</a></li>
									<li><a href="">Reffard (pdf)</a></li>
									<li><a href="">All Status (pdf)</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn btn-primary toggle-button" type="button" data-toggle="dropdown">Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../six-madrasah/marksheet.php" target="_blank">Marksheet</a></li>
									<li><a href="" target="_blank">Tesimonial</a></li>
									<li><a href="" target="_blank">T.C</a></li>
									<li class="divider"></li>
									<li><a href="#">Marksheet (pdf)</a></li>
								</ul>
							</div>        
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Admission
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" target="_blank">Student List</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Fees Collection
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" target="_blank">Admission Fee</a></li>
									<li><a href="" target="_blank">Montly Fee</a></li>
									<li><a href="" target="_blank">Exam Fee</a></li>
								</ul>
							</div>             
						</div>
					</div>
				</div>
				<div id="other" style="display: none;">
					<h2 class="text-center"> Please Waite Comming Soon</h2>
				</div>
			</div>
		</div>
		<!--End Six Dashboard -->
		<!--Start Seven Dashboard -->
		<div class="right-container" id="seven" style="display:none">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<ul class="breadcrumb">
							<li><i class="fa fa-home"></i><a href=""> Seven</a></li>
							<li class="active">Seven Home Page</li>
						</ul>
					</div>
					<div class="col-md-8">
						<ul class="list-inline pull-right mini-stat">
							<li>
								<h5>Total Student <span class="stat-value color-blue"><i class="fa fa-plus-circle"></i> <?php echo $total ?></span></h5>	
							</li>
							<li>
								<h5>Mail <span class="stat-value color-green"><i class="fa fa-plus-circle"></i> 2,500</span></h5>
							</li>
							<li>
								<h5>Femail <span class="stat-value color-orang"><i class="fa fa-plus-circle"></i> 5,500</span></h5>
							</li>
						</ul>
					</div>
				</div>
            
				<div class="row container-fluid">
					<div class="col-md-12">
						<div class="main-header">
							<em>The dashboard of class Seven</em>
							<h2><?php echo $ses['school_name']?></h2>
						</div>
					</div>
                </div>
                <form action="" method="post">
	                <div class="row  thumbnail">
	                	<div class="">
							<div class="col-md-4 ">
		                		<h4 class="margin">Select Your Institute Type</h4>
		                	</div>
		                	<div class="col-md-3 ">
		                		<h4 class="margin"><input type="checkbox" name="school" value="School" onclick="selected('school', this)">School</h4>
		                	</div>
		                	<div class="col-md-3 ">
		                		<h4 class="margin"><input type="checkbox" name="madrasah" onclick="selected('madrasah', this)">Madrasah</h4>
		                	</div>
		                	<div class="col-md-2 ">
		                		<h4 class="margin"><input type="checkbox" name="other" onclick="selected('other', this)">Other</h4>
		                	</div>
		                </div>
	                </div>
            	</form>
            	
                <div id="school" style="display: none;">
					<div class="thumbnail tumb-set" style="background:#dff0d8">
						<div class="row text-center">
							<h4 class="margin">Result Management <small>for School</small></h4>
						</div>
						<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
							<div class="col-md-2 col-sm-3 col-lg-3">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" class="" target="_blank">Mark Entry</a></li>
									<li><a href="" class="" target="_blank">Mark Update</a></li>
									<li><a href="" class="" target="_blank">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_blank">Passed</a></li>
									<li><a href="#" class="" target="_blank">Reffard</a></li>
									<li><a href="#" class="" target="_blank">All Status</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_blank">Marksheet</a></li>
									<li><a href="#" class="" target="_blank">Testimonial</a></li>
									<li><a href="#" class="" target="_blank">T.C</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button" type="button" data-toggle="dropdown">
									Admission
									<span class="caret"></span>
								</button>
							</div>
							<div class="col-md-2 col-sm-3">
								<button  class="btn toggle-button" type="button" data-toggle="dropdown">
									Fees Collection
									<span class="caret"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<div id="madrasah" style="display: none;">
					<div class="thumbnail tumb-set" style="background:#f3e7d9">
						<div class="row text-center">
							<h4 class="margin">Result Management <small>for Madrasah</small></h4>
						</div>
						<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
							<div class="col-md-2 col-sm-3 col-lg-3">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../seven-madrasah/seven.php" target="_blank" class="">Mark Entry</a></li>
									<li><a href="../six-eight-madrasah/search_update.php" target="_blank" class="">Mark Update</a></li>
									<li><a href="#" target="_blank" class="">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn btn-info toggle-button" type="button" data-toggle="dropdown">Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../seven-madrasah/passed.php" target="_blank">Passed</a></li>
									<li><a href="../seven-madrasah/reffard.php" target="_blank">Reffard</a></li>
									<li><a href="../seven-madrasah/all_result.php" target="_blank">All Status</a></li>
									<li Class="divider"></li>
									<li><a href="#">Passed (pdf)</a></li>
									<li><a href="#">Reffard (pdf)</a></li>
									<li><a href="#">All Status (pdf)</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn btn-primary toggle-button" type="button" data-toggle="dropdown">Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../seven-madrasah/marksheet.php" target="_blank">Marksheet</a></li>
									<li><a href="" target="_blank">Tesimonial</a></li>
									<li><a href="" target="_blank">T.C</a></li>
									<li class="divider"></li>
									<li><a href="#">Marksheet (pdf)</a></li>
								</ul>
							</div>        
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Admission
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" target="_blank">Student List</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Fees Collection
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" target="_blank">Admission Fee</a></li>
									<li><a href="" target="_blank">Montly Fee</a></li>
									<li><a href="" target="_blank">Exam Fee</a></li>
								</ul>
							</div>             
						</div>
					</div>
				</div>
				
				<div id="other" style="display: none;">
					<h2 class="text-center"> Please Waite Comming Soon</h2>
				</div>
			</div>
		</div>
		<!--End Seven Dashboard -->
		<!--Start Eight Dashboard -->
		<div class="right-container display-none" id="eight">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<ul class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="six.php"> Eight</a></li>
							<li class="active">Class Eight Home Page</li>
						</ul>
					</div>
					<div class="col-md-8">
						<ul class="list-inline pull-right mini-stat">
							<li>
								<h5>Total Student <span class="stat-value color-blue"><i class="fa fa-plus-circle"></i> <?php echo $total ?></span></h5>
							</li>
							<li>
								<h5>Mail <span class="stat-value color-green"><i class="fa fa-plus-circle"></i> 2,500</span></h5>
							</li>
							<li>
								<h5>Femail <span class="stat-value color-orang"><i class="fa fa-plus-circle"></i> 5,500</span></h5>
							</li>
						</ul>
					</div>
				</div>
            
				<div class="row container-fluid">
					<div class="col-md-12">
						<div class="main-header">
							<em>The dashboard of class Six</em>
							<h2><?php echo $ses['school_name']?></h2>
						</div>
					</div>
                </div>
                <form action="" method="post">
	                <div class="row  thumbnail">
	                	<div class="">
							<div class="col-md-4 ">
		                		<h4 class="margin">Select Your Institute Type</h4>
		                	</div>
		                	<div class="col-md-3">
		                		<h4 class="margin"><input type="checkbox" name="school" value="School" onclick="selected('school', this)">School</h4>
		                	</div>
		                	<div class="col-md-3">
		                		<h4 class="margin"><input type="checkbox" name="madrasah" onclick="selected('madrasah', this)">Madrasah</h4>
		                	</div>
		                	<div class="col-md-2">
		                		<h4 class="margin"><input type="checkbox" name="other" onclick="selected('other', this)">Other</h4>
		                	</div>
		                </div>
	                </div>
            	</form>
				<div id="school" style="display: none;">
					<div class="thumbnail tumb-set" style="background:#dff0d8">
						<div class="row text-center">
							<h4 class="margin">Result Management <small>for School</small></h4>
						</div>
						<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
							<div class="col-md-2 col-sm-3 col-lg-3">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" class="" target="_blank">Mark Entry</a></li>
									<li><a href="" class="" target="_blank">Mark Update</a></li>
									<li><a href="" class="" target="_blank">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_blank">Passed</a></li>
									<li><a href="#" class="" target="_blank">Reffard</a></li>
									<li><a href="#" class="" target="_blank">All Status</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_blank">Marksheet</a></li>
									<li><a href="#" class="" target="_blank">Testimonial</a></li>
									<li><a href="#" class="" target="_blank">T.C</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button" type="button" data-toggle="dropdown">
									Admission
									<span class="caret"></span>
								</button>
							</div>
							<div class="col-md-2 col-sm-3">
								<button  class="btn toggle-button" type="button" data-toggle="dropdown">
									Fees Collection
									<span class="caret"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<div id="madrasah" style="display: none;">
					<div class="thumbnail tumb-set" style="background:#f3e7d9">
						<div class="row text-center">
							<h4 class="margin">Result Management <small>for Madrasah</small></h4>
						</div>
						<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
							<div class="col-md-2 col-sm-3 col-lg-3">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../eight-madrasah/eight.php" target="_blank" class="">Mark Entry</a></li>
									<li><a href="../six-eight-madrasah/search_update.php" target="_blank" class="">Mark Update</a></li>
									<li><a href="#" target="_blank" class="">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn btn-info toggle-button" type="button" data-toggle="dropdown">Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../eight-madrasah/passed.php" target="_blank">Passed</a></li>
									<li><a href="../eight-madrasah/reffard.php" target="_blank">Reffard</a></li>
									<li><a href="../eight-madrasah/all_result.php" target="_blank">All Status</a></li>
									<li Class="divider"></li>
									<li><a href="#">Passed (pdf)</a></li>
									<li><a href="#">Reffard (pdf)</a></li>
									<li><a href="#">All Status (pdf)</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn btn-primary toggle-button" type="button" data-toggle="dropdown">Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../eight-madrasah/marksheet.php" target="_blank">Marksheet</a></li>
									<li><a href="" target="_blank">Tesimonial</a></li>
									<li><a href="" target="_blank">T.C</a></li>
									<li class="divider"></li>
									<li><a href="#">Marksheet (pdf)</a></li>
								</ul>
							</div>        
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Admission
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" target="_blank">Student List</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Fees Collection
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" target="_blank">Admission Fee</a></li>
									<li><a href="" target="_blank">Montly Fee</a></li>
									<li><a href="" target="_blank">Exam Fee</a></li>
								</ul>
							</div>             
						</div>
					</div>
				</div>
				
				<div id="other" style="display: none;">
					<h2 class="text-center"> Please Waite Comming Soon</h2>
				</div>
			</div>
		</div>
		<!--End Eight Dashboard -->
		<!--Start Nine Dashboard -->
		<div class="right-container display-none" id="nine">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
					<ul class="breadcrumb">
								<li><i class="fa fa-home"></i><a href="nine.php"> Nine</a></li>
								<li class="active">Nine Home Page</li>
							</ul>
					</div>
					<div class="col-md-8">
						<ul class="list-inline pull-right mini-stat">
							<li>
								<h5>Total Student <span class="stat-value color-blue"><i class="fa fa-plus-circle"></i> <?php echo $total ?></span></h5>
							</li>
							<li>
								<h5>Mail <span class="stat-value color-green"><i class="fa fa-plus-circle"></i> 2,500</span></h5>
							</li>
							<li>
								<h5>Femail <span class="stat-value color-orang"><i class="fa fa-plus-circle"></i> 5,500</span></h5>
							</li>
						</ul>
					</div>
				</div>
				<div class="row container-fluid">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
						<div class="main-header">
							<em>The Dasboard of class nine</em>
							<h2><?php echo $ses['school_name']?></h2>
						</div>
					</div>
                </div>
                <form action="" method="post">
	                <div class="row container-fluid thumbnail">
	                	<div class="">
							<div class="col-md-4 col-sm-3 col-lg-3 col-xs-3">
		                		<h4 class="margin">Select Your Institute Type</h4>
		                	</div>
		                	<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
		                		<h4 class="margin"><input type="checkbox" name="school" value="School" onclick="selected('school', this)">School</h4>
		                	</div>
		                	<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
		                		<h4 class="margin"><input type="checkbox" name="madrasah" onclick="selected('madrasah', this)">Madrasah</h4>
		                	</div>
		                	<div class="col-md-2 col-sm-3 col-lg-3 col-xs-3">
		                		<h4 class="margin"><input type="checkbox" name="other" onclick="selected('other', this)">Other</h4>
		                	</div>
		                </div>
	                </div>
            	</form>
				<div id="school" style="display: none;">
					<div class="thumbnail tumb-set" style="background:#dff0d8">
						<div class="row text-center">
							<h4 class="margin">Result Management <small>for School</small></h4>
						</div>
						<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
							<div class="col-md-2 col-sm-3 col-lg-3">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" class="" target="_blank">Mark Entry Science</a></li>
									<li><a href="" class="" target="_blank">Mark Entry General</a></li>
									<li><a href="" class="" target="_blank">Mark Entry Commarce</a></li>
									<li><a href="" class="" target="_blank">Mark Update</a></li>
									<li><a href="" class="" target="_blank">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_blank">Passed</a></li>
									<li><a href="#" class="" target="_blank">Reffard</a></li>
									<li><a href="#" class="" target="_blank">All Status</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_blank">Marksheet Science</a></li>
									<li><a href="#" class="" target="_blank">Marksheet General</a></li>
									<li><a href="#" class="" target="_blank">Marksheet Commarce</a></li>
									<li><a href="#" class="" target="_blank">Data Table</a></li>
									<li><a href="#" class="" target="_blank">Testimonial</a></li>
									<li><a href="#" class="" target="_blank">T.C</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button" type="button" data-toggle="dropdown">
									Admission
									<span class="caret"></span>
								</button>
							</div>
							<div class="col-md-2 col-sm-3">
								<button  class="btn toggle-button" type="button" data-toggle="dropdown">
									Fees Collection
									<span class="caret"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div id="madrasah" style="display: none;">
					<div class="thumbnail tumb-set" style="background:#f3e7d9">
						<div class="row text-center">
							<h4 class="margin">Result Management <small>for Madrasah</small></h4>
						</div>
						<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
							<div class="col-md-2 col-sm-3 col-lg-3">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../class_nine/nine_humanity.php" target="_blank" class="">Mark Entry General</a></li>
									<li><a href="../class_nine/nine_science.php" target="_blank" class="">Mark Entry Science</a></li>
									<li><a href="../class_nine/nine_commarce.php" target="_blank" class="">Mark Entry Commarce</a></li>
									<li><a href="../class_nine/search_update.php" target="_blank" class="">Mark Update</a></li>
									<li><a href="#" target="_blank" class="">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn btn-info toggle-button" type="button" data-toggle="dropdown">Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../class_nine/passed.php" target="_blank">Passed</a></li>
									<li><a href="../class_nine/reffard.php" target="_blank">Reffard</a></li>
									<li><a href="../class_nine/all_status.php" target="_blank">All Status</a></li>
									<li Class="divider"></li>
									<li><a href="#">Passed (pdf)</a></li>
									<li><a href="#">Reffard (pdf)</a></li>
									<li><a href="#">All Status (pdf)</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn btn-primary toggle-button" type="button" data-toggle="dropdown">Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../class_nine/marksheet_science.php" target="_blank">Marksheet Science</a></li>
									<li><a href="../class_nine/marksheet_humanity.php" target="_blank">Marksheet General</a></li>
									<li><a href="../class_nine/marksheet_commarce.php" target="_blank">Marksheet Commarce</a></li>
									<li><a href="#" target="_blank">Tesimonial</a></li>
									<li><a href="#" target="_blank">T.C</a></li>
									<li><a href="../class_nine/query tablenine.php" target="_blank">Data Table</a></li>
									<li class="divider"></li>
									<li><a href="../class_nine/marksheet_science_pdf.php">Marksheet Science (pdf)</a></li>
									<li><a href="../class_nine/marksheet_general_pdf.php">Marksheet General (pdf)</a></li>
									<li><a href="../class_nine/marksheet_commarce_pdf.php">Marksheet Commarce (pdf)</a></li>
								</ul>
							</div>        
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Admission
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" target="_blank">Student List</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Fees Collection
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" target="_blank">Admission Fee</a></li>
									<li><a href="" target="_blank">Montly Fee</a></li>
									<li><a href="" target="_blank">Exam Fee</a></li>
								</ul>
							</div>             
						</div>
					</div>
				</div>
				<div id="other" style="display: none;">
					<h2 class="text-center">Comming Soon</h2>
				</div>
			</div>
		</div>
		<!--End Nine Dashboard -->
		<!--Start Ten Dashboard -->
		<div class="right-container display-none" id="ten">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
						<ul class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="nine.php"> Nine</a></li>
							<li class="active">Ten Home Page</li>
						</ul>
					</div>
					<div class="col-md-8">
						<ul class="list-inline pull-right mini-stat">
							<li>
								<h5>Total Student <span class="stat-value color-blue"><i class="fa fa-plus-circle"></i> <?php echo $total ?></span></h5>
							</li>
							<li>
								<h5>Mail <span class="stat-value color-green"><i class="fa fa-plus-circle"></i> 2,500</span></h5>
							</li>
							<li>
								<h5>Femail <span class="stat-value color-orang"><i class="fa fa-plus-circle"></i> 5,500</span></h5>
							</li>
						</ul>
					</div>
				</div>
				<div class="row container-fluid">
					<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
						<div class="main-header">
							<em>The board of class nine</em>
							<h2><?php echo $ses['school_name']?></h2>
						</div>
					</div>
                </div>

                <form action="" method="post">
	                <div class="row container-fluid thumbnail">
	                	<div class="">
							<div class="col-md-4 col-sm-3 col-lg-3 col-xs-3">
		                		<h4 class="margin">Select Your Institute Type</h4>
		                	</div>
		                	<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
		                		<h4 class="margin"><input type="checkbox" name="school" value="School" onclick="selected('school', this)">School</h4>
		                	</div>
		                	<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
		                		<h4 class="margin"><input type="checkbox" name="madrasah" onclick="selected('madrasah', this)">Madrasah</h4>
		                	</div>
		                	<div class="col-md-2 col-sm-3 col-lg-3 col-xs-3">
		                		<h4 class="margin"><input type="checkbox" name="other" onclick="selected('other', this)">Other</h4>
		                	</div>
		                </div>
	                </div>
            	</form>
				<div id="school" style="display: none;">
					<div class="thumbnail tumb-set" style="background:#dff0d8">
						<div class="row text-center">
							<h4 class="margin">Result Management <small>for School</small></h4>
						</div>
						<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
							<div class="col-md-2 col-sm-3 col-lg-3">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" class="" target="_blank">Mark Entry Science</a></li>
									<li><a href="" class="" target="_blank">Mark Entry General</a></li>
									<li><a href="" class="" target="_blank">Mark Entry Commarce</a></li>
									<li><a href="" class="" target="_blank">Mark Update</a></li>
									<li><a href="" class="" target="_blank">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_blank">Passed</a></li>
									<li><a href="#" class="" target="_blank">Reffard</a></li>
									<li><a href="#" class="" target="_blank">All Status</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_blank">Marksheet Science</a></li>
									<li><a href="#" class="" target="_blank">Marksheet General</a></li>
									<li><a href="#" class="" target="_blank">Marksheet Commarce</a></li>
									<li><a href="#" class="" target="_blank">Data Table</a></li>
									<li><a href="#" class="" target="_blank">Testimonial</a></li>
									<li><a href="#" class="" target="_blank">T.C</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button" type="button" data-toggle="dropdown">
									Admission
									<span class="caret"></span>
								</button>
							</div>
							<div class="col-md-2 col-sm-3">
								<button  class="btn toggle-button" type="button" data-toggle="dropdown">
									Fees Collection
									<span class="caret"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div id="madrasah" style="display: none;">
					<div class="thumbnail tumb-set" style="background:#f3e7d9">
						<div class="row text-center">
							<h4 class="margin">Result Management <small>for Madrasah</small></h4>
						</div>
						<div class="row padding-top col-md-offset-1" style="margin-top:-10px">
							<div class="col-md-2 col-sm-3 col-lg-3">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../class_ten/ten_general.php" target="_blank" class="">Mark Entry General</a></li>
									<li><a href="../class_ten/ten_science.php" target="_blank" class="">Mark Entry Science</a></li>
									<li><a href="../class_ten/ten_commarce.php" target="_blank" class="">Mark Entry Commarce</a></li>
									<li><a href="../class_ten/search_update.php" target="_blank" class="">Mark Update</a></li>
									<li><a href="#" target="_blank" class="">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn btn-info toggle-button" type="button" data-toggle="dropdown">Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../class_ten/passed.php" target="_blank">Passed</a></li>
									<li><a href="../class_ten/reffard.php" target="_blank">Reffard</a></li>
									<li><a href="../class_ten/all_status.php" target="_blank">All Status</a></li>
									<li Class="divider"></li>
									<li><a href="#">Passed (pdf)</a></li>
									<li><a href="#">Reffard (pdf)</a></li>
									<li><a href="#">All Status (pdf)</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn btn-primary toggle-button" type="button" data-toggle="dropdown">Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../class_ten/marksheet_science.php" target="_blank">Marksheet Science</a></li>
									<li><a href="../class_ten/marksheet_general.php" target="_blank">Marksheet General</a></li>
									<li><a href="../class_ten/marksheet_commarce.php" target="_blank">Marksheet Commarce</a></li>
									<li><a href="#" target="_blank">Tesimonial</a></li>
									<li><a href="#" target="_blank">T.C</a></li>
									<li><a href="../class_ten/query tablenine.php" target="_blank">Data Table</a></li>
									<li class="divider"></li>
									<li><a href="../class_ten/marksheet_science_pdf.php" target="_blank">Marksheet Science (pdf)</a></li>
									<li><a href="../class_ten/marksheet_general_pdf.php" target="_blank">Marksheet General (pdf)</a></li>
									<li><a href="../class_ten/marksheet_commarce.php" target="_blank">Marksheet Commarce (pdf)</a></li>
								</ul>
							</div>        
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Admission
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" target="_blank">Student List</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Fees Collection
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="" target="_blank">Admission Fee</a></li>
									<li><a href="" target="_blank">Montly Fee</a></li>
									<li><a href="" target="_blank">Exam Fee</a></li>
								</ul>
							</div>             
						</div>
					</div>
				</div>
				<div id="other" style="display: none;">
					<h2 class="text-center">Comming Soon</h2>
				</div>
			</div>
		</div>
		<!--End Ten Dashboard -->
<script type="text/javascript">
	function five(){
		var five = document.getElementById('five').innerHTML;
		document.getElementById('right-container').innerHTML = five;
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
</script>



    
	<!--<script src="../js/jquery3.1.1.js"></script>
  <script src="../js/bootstrap.min.js"></script>-->
	<script type="text/javascript">
    $(document).ready(function() {
      $("#panel1").click(function() {
        $("#arow1").toggleClass("fa-chevron-left");
        $("#arow1").toggleClass("fa-chevron-down");
      });
        
      $("#panel2").click(function() {
        $("#arow2").toggleClass("fa-chevron-left");
        $("#arow2").toggleClass("fa-chevron-down");
      });
        
      $("#panel3").click(function() {
        $("#arow3").toggleClass("fa-chevron-left");
        $("#arow3").toggleClass("fa-chevron-down");
      });
        
      $("#panel4").click(function() {
        $("#arow4").toggleClass("fa-chevron-left");
          $("#arow4").toggleClass("fa-chevron-down");
      });
        
      $("#panel5").click(function() {
        $("#arow5").toggleClass("fa-chevron-left");
        $("#arow5").toggleClass("fa-chevron-down");
      });
        
      $("#panel6").click(function() {
        $("#arow6").toggleClass("fa-chevron-left");
        $("#arow6").toggleClass("fa-chevron-down");
      });
        
      $("#panel7").click(function() {
        $("#arow7").toggleClass("fa-chevron-left");
        $("#arow7").toggleClass("fa-chevron-down");
      });
        
      $("#panel8").click(function() {
        $("#arow8").toggleClass("fa-chevron-left");
        $("#arow8").toggleClass("fa-chevron-down");
      });
        
      $("#panel9").click(function() {
        $("#arow9").toggleClass("fa-chevron-left");
        $("#arow9").toggleClass("fa-chevron-down");
      });
        
      $("#panel10").click(function() {
        $("#arow10").toggleClass("fa-chevron-left");
        $("#arow10").toggleClass("fa-chevron-down");
      });
        
      $("#panel11").click(function() {
        $("#arow11").toggleClass("fa-chevron-left");
        $("#arow11").toggleClass("fa-chevron-down");
      });
	  
	  $("#panel20").click(function() {
        $("#arow20").toggleClass("fa-chevron-left");
        $("#arow20").toggleClass("fa-chevron-down");
      });
        
      $("#menu-icon").click(function() {
        $("#chang-menu-icon").toggleClass("fa-bars");
        $("#chang-menu-icon").toggleClass("fa-times");
        $("#show-nav").toggleClass("hide-sidebar");
        $("#show-nav").toggleClass("left-sidebar");
          
        $("#left-container").toggleClass("less-width");
        $("#right-container").toggleClass("full-width");
      });
        
     
        
    });
	
  </script>