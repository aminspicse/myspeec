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
							<div class="col-md-12">
								<div class="main-header">
									<em class="responsive-dash text-info">Last Update: 01-09-2018 <a href="https://amincse.blogspot.com/2018/07/usermanuelpart1.html" target="_new">Help</a></em>
									<h2 class="responsive-school text-success"><?php echo $ses['school_name']?></h2>
								</div>
							</div>
						</div>
					<!--
					<div class="row padding-top">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6"><img src="https://www.amcharts.com/wp-content/uploads/2016/03/demo_6559_light-1.jpg" class="img-responsive"></div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6"><img src="https://www.amcharts.com/wp-content/uploads/2013/12/demo_7404_light.jpg" class="img-responsive"></div>              
					</div>
					<div class="row padding-top">
						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6"><img src="https://www.amcharts.com/wp-content/uploads/2013/12/demo_7406_light.jpg" class="img-responsive"></div>
						<div class="col-md-6 col-sm-6 col-lg-6 col-xs-6"><img src="https://www.amcharts.com/wp-content/uploads/2013/12/demo_7403_light.jpg" class="img-responsive"></div>              
					</div>
					-->
				</div>
			</div>
		</div>
		<!-- End Dashboard Section-->