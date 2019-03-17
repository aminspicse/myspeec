		<!--Start Six Dashboard -->
		<div class="right-container" id="six" style="display:none">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<ul class="breadcrumb">
							<li><i class="fa fa-home"></i><a href="#">Six</a></li>
							<li class="active">Home Page</li>
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
							<em class="responsive-dash">The dashboard of class Six</em>
							<h2 class="responsive-school"><?php echo $ses['school_name']?></h2>
						</div>
					</div>
				</div>
				<form action="" method="post">
					<div class="row  thumbnail" style="background:#ddd">
						<div class="">
							<div class="col-md-4 ">
								<h4 class="margin responsive-dash">Select Your Institute Type</h4>
							</div>
							<div class="col-md-3 col-xs-4">
								<h4 class="margin"><input type="checkbox" class="" name="school" value="School" onclick="selected('school', this)">School</h4>
							</div>
							<div class="col-md-3 col-xs-5">
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
							<div class="col-md-2 col-sm-3 col-lg-3 col-xs-6">
								<button class="btn btn-success toggle-dropdown" type="button" data-toggle="dropdown">
									Entry Update
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_new">Mark Entry</a></li>
									<li><a href="#" class="" target="_new">Mark Update</a></li>
									<li><a href="#" class="" target="_new">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_new">Passed</a></li>
									<li><a href="#" class="" target="_new">Reffard</a></li>
									<li><a href="#" class="" target="_new">All Status</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3 col-xs-6">
								<button class="btn toggle-dropdown" type="button" data-toggle="dropdown">
									Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" class="" target="_new">Marksheet</a></li>
									<li><a href="#" class="" target="_new">Testimonial</a></li>
									<li><a href="#" class="" target="_new">T.C</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3 col-xs-6">
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
									<li><a href="../six-madrasah/six.php" target="_new" class="">Mark Entry</a></li>
									<li><a href="../six-eight-madrasah/search_update.php" target="_new" class="">Mark Update</a></li>
									<li><a href="../six-madrasah/search_delete.php" target="_new" class="">Delete</a></li>
								</ul>
							</div>
							<div class="col-md-2 col-sm-3 ">
								<button class="btn btn-info toggle-button" type="button" data-toggle="dropdown">Result Query
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../six-madrasah/passed.php" target="_new">Passed</a></li>
									<li><a href="../six-madrasah/reffard.php" target="_new">Reffard</a></li>
									<li><a href="../six-madrasah/all_result.php" target="_new">All Status</a></li>
									<li Class="divider"></li>
									<li><a href="../marksheet-others/result_summary_form.php" target="new">Passed (pdf)</a></li>
									<li><a href="../marksheet-others/result_summary_form.php" target="new">Reffard (pdf)</a></li>
									<li><a href="../marksheet-others/result_summary_form.php" target="new">All Status (pdf)</a></li>
								</ul>
							</div>    
							<div class="col-md-2 col-sm-3">
								<button class="btn btn-primary toggle-button" type="button" data-toggle="dropdown">Reporting
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="../six-eight-madrasah/marksheet_form.php" target="_new">Marksheet</a></li>
									<li><a href="#" target="_new">Tesimonial</a></li>
									<li><a href="#" target="_new">T.C</a></li>
									<li class="divider"></li>
									<li><a href="#">Marksheet (pdf)</a></li>
								</ul>
							</div>        
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Admission
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" target="_new">Student List</a></li>
								</ul>
							</div>  
							<div class="col-md-2 col-sm-3">
								<button class="btn toggle-button " type="button" data-toggle="dropdown">Fees Collection
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#" target="_new">Admission Fee</a></li>
									<li><a href="#" target="_new">Montly Fee</a></li>
									<li><a href="#" target="_new">Exam Fee</a></li>
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