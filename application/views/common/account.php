<!-- Main Container -->
<main id="main-container">
	<!-- Page Content -->
	<!-- User Info -->
	<div class="bg-image bg-image-bottom" style="background-image: url('<?php echo base_url("assets/media/photos/photo13@2x.jpg")?>');">
		<div class="bg-black-op-75 py-30">
			<div class="content content-full text-center">
				<!-- Avatar -->
				<div class="mb-15">
					<a class="img-link" href="">
						<img class="img-avatar img-avatar96 img-avatar-thumb" src="<?php echo base_url('assets/media/avatars/avatar15.jpg')?>" alt="">
					</a>
				</div>
				<!-- END Avatar -->

				<!-- Personal -->
				<h1 class="h3 text-white font-w700 mb-10">John Smith</h1>
				<h2 class="h5 text-white-op">
					Product Manager <a class="text-primary-light" href="javascript:void(0)">Officer</a>
				</h2>
				<!-- END Personal -->
			</div>
		</div>
	</div>
	<!-- END User Info -->

	<!-- Main Content -->
	<div class="content">
		<!-- User Profile -->
		<div class="block">
			<div class="block-header block-header-default">
				<h3 class="block-title">
					<i class="fa fa-user-circle mr-5 text-muted"></i> User Profile
				</h3>
			</div>
			<div class="block-content">
				<form action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
					<div class="row items-push">
						<div class="col-lg-3">
							<p class="text-muted">
								Your account’s vital info. Your username will be publicly visible.
							</p>
						</div>
						<div class="col-lg-7 offset-lg-1">
							<div class="form-group row">
								<div class="col-12">
									<label for="profile-settings-username">Username</label>
									<input type="text" class="form-control form-control-lg" id="profile-settings-username" name="profile-settings-username" placeholder="Enter your username.." value="john.doe">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12">
									<label for="profile-settings-name">Name</label>
									<input type="text" class="form-control form-control-lg" id="profile-settings-name" name="profile-settings-name" placeholder="Enter your name.." value="John Doe">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12">
									<label for="profile-settings-email">Email Address</label>
									<input type="email" class="form-control form-control-lg" id="profile-settings-email" name="profile-settings-email" placeholder="Enter your email.." value="john.doe@example.com">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-10 col-xl-6">
									<div class="push">
										<img class="img-avatar" src="<?php echo base_url('assets/media/avatars/avatar15.jpg') ?>" alt="">
									</div>
									<div class="custom-file">
										<!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
										<input type="file" class="custom-file-input" id="profile-settings-avatar" name="profile-settings-avatar" data-toggle="custom-file-input">
										<label class="custom-file-label" for="profile-settings-avatar">Choose new avatar</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12">
									<button type="submit" class="btn btn-alt-primary">Update</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END User Profile -->

		<!-- Change Password -->
		<div class="block" id="password">
			<div class="block-header block-header-default">
				<h3 class="block-title">
					<i class="fa fa-asterisk mr-5 text-muted"></i> Change Password
				</h3>
			</div>
			<div class="block-content">
				<form action="be_pages_generic_profile.edit.html" method="post" onsubmit="return false;">
					<div class="row items-push">
						<div class="col-lg-3">
							<p class="text-muted">
								Changing your sign in password is an easy way to keep your account secure.
							</p>
						</div>
						<div class="col-lg-7 offset-lg-1">
							<div class="form-group row">
								<div class="col-12">
									<label for="profile-settings-password">Current Password</label>
									<input type="password" class="form-control form-control-lg" id="profile-settings-password" name="profile-settings-password">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12">
									<label for="profile-settings-password-new">New Password</label>
									<input type="password" class="form-control form-control-lg" id="profile-settings-password-new" name="profile-settings-password-new">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12">
									<label for="profile-settings-password-new-confirm">Confirm New Password</label>
									<input type="password" class="form-control form-control-lg" id="profile-settings-password-new-confirm" name="profile-settings-password-new-confirm">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-12">
									<button type="submit" class="btn btn-alt-primary">Update</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END Change Password -->

	</div>
	<!-- END Main Content -->
	<!-- END Page Content -->
</main>
<!-- END Main Container -->
