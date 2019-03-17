<?php 
	
	$admin = $ses['email'];
	$sqllog = "SELECT * FROM login_control WHERE user_name = '$admin' ORDER BY id DESC LIMIT 10";
	$exelog = $conn->query($sqllog);
	//$row1 = $exelog->fetch_assoc();
	//echo $row1['user_name'];

?>
	<div class="right-container" id="activity" style="display:none">
        <div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="../index.php">Home</a></li>
						<li class="active">Activity</li>
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
				<table class="table table-striped">
					<tr class="text-center"><h4 class="text-center">Your Last 10 Login History</h4></tr>
					<tr>
						<th>User Name</th>
						<th>Login Date</th>
						<th>Login Time</th>
						<th>Password Accuracy</th>
					</tr>
					<?php while($rowlog = $exelog->fetch_assoc()){?>
					<tr>
						<td><?php echo $rowlog['user_name'] ?></td>
						<td><?php echo $rowlog['login_date'] ?></td>
						<td><?php echo $rowlog['login_time'] ?></td>
						<td><?php echo $rowlog['login_status'] ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>   
        </div>
    </div>