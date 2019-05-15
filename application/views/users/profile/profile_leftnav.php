<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul class="navbar-nav mr-auto">
				<li class="">
					<a href="<?= base_url('profile') ?>" class="card-link"> <i class="fa fa-user"></i> Profile</a>
					
				</li>
				<li>
					<a href="<?= base_url('changeimage')?>" class="card-link">  <i class="fa fa-image"></i> Profile Picture</a>
				</li>
				<li class="">
					<a href="<?= base_url('editinfo') ?>" class="card-link" target=""> <i class="fas fa-edit"></i> Update Info</a>
					<!--
					<ul>
						<li><a href="<?= base_url() ?>Profile/update_personal_info" class="card-link">Update Info</a></li>
                        <li><a href="<?= base_url() ?>ChangePassword/" class="card-link">Change Password</a></li>
					</ul>
					-->
				</li>
				<li class="">
					<a href="<?= base_url('new_speec') ?>" class="card-link" target=""><i class="fa fa-newspaper"></i> New Speek</a>
					
				</li>
                <li class=" ">
					<a href="<?= base_url('changepassword') ?>" class="card-link" target=""> <i class="fa fa-unlock"></i> Change Password</a>
					
				</li>
                <li class="">
					<a href="" class="card-link" target=""><i class="fa fas fa-play"></i> Embed Video</a>
					
				</li>
				<li class="">
					<a href="<?= base_url('mypost') ?>" class="card-link" target="">My Speec</a>

				</li>
				<!--
				<li class="has-children comments">
					<a href="#0">Comments</a>
					
					<ul>
						<li><a href="#0">All Comments</a></li>
						<li><a href="#0">Edit Comment</a></li>
						<li><a href="#0">Delete Comment</a></li>
					</ul>
				</li>
				-->
			</ul>

			<ul class="navbar-nav mr-auto">
				<li class="cd-label">&copy;myspeec-<?= date('y')?></li>
				<li class="action-btn"><a href="" class="card-link">Refresh</a></li>
			</ul>

		</nav>
<!--
		<div class="content-wrapper">
			<h1>Responsive Sidebar Navigation</h1>
		</div>  .content-wrapper -->
<!--	</main> --> <!-- .cd-main-content -->