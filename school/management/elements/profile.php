
	<div class="right-container" id="profile" style="display:none">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
						<li class="active">Admin Profile</li>
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
						<em class="responsive-dash">Institute Name</em>
						<h2 class="responsive-school"><?php echo $ses['school_name']?></h2>
					</div>
                </div>
            </div>
            <div class="container-fluid">
				<table class="table">
					<thead>
						<tr> 
							<th colspan="2" class="text-center">Admin Id: <?php echo $ses['id']?></th>
							<th colspan="0" class="text-center responsive-dash">Form Activation Code: <?php echo "100000"?></th>
						</tr>
						<tr>
							<th></th>
							<th class="" colspan="2">Email: <?php echo $ses['email']?></th>
							<th class="" colspan="2">Password: <?php echo $ses['backup']?></th>
						</tr>
						<tr>
							<th></th>
							<th class="" colspan="2">Admin Name: <?php echo $ses['admin_name']?></th>
							<th class="" colspan="2">Admin Phone: <?php echo $ses['admin_phone']?></th>
						</tr>
						<tr>
							<th></th>
							<th class="" colspan="2">Head Teacher's Name: <?php echo $ses['head_name']?></th>
							<th class="" colspan="2">Head Teacher's Phone: <?php echo $ses['head_phone']?></th>
						</tr>
						<tr>
							<th></th>
							<th class="" colspan="2">Address: <?php ?></th>
							<th class="" colspan="2">School Type: <?php ?></th>
						</tr>
						<tr>
							<th></th>
							<th class=""><img style="height: 100px; width: 100px" class="img-responsive" src="<?php echo $ses['institute_logu'] ?>" alt="Institute Logu" /></th>
							<th class=""> <?php echo'<img class="img-responsive" style="height: 100px; width: 100px" src="data:image/jpeg;base64,'.base64_encode($ses['institute_licence'] ).'">' ?></th>
							<th class=""> <?php echo'<img class="img-responsive" style="height: 100px; width: 100px" src="data:image/jpeg;base64,'.base64_encode($ses['institute_head'] ).'">' ?></th>

						</tr>
					</thead>
				</table>
			</div>   
        </div>
    </div>