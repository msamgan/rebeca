<div>
	<a class="hiddenanchor" id="signup"></a>
	<a class="hiddenanchor" id="signin"></a>

	<div class="login_wrapper">
		<div class="animate form login_form">
			<h3><?= $this->Flash->render() ?></h3>
			<section class="login_content">
				<form method="post" action="users/auth" >
					<h1>Login</h1>
					<div>
						<input type="email" class="form-control" name="email" placeholder="Email" required="" />
					</div>
					<div>
						<input type="password" class="form-control" name="password" placeholder="Password" required="" />
					</div>
					<div class="pull-right" >
						<button class="btn btn-primary submit" type="submit" >Log in</button>
						<!-- <a class="reset_pass" href="#">Lost your password?</a> -->
					</div>

					<div class="clearfix"></div>

					<div class="separator">
						<p class="change_link">New to site?
							<a href="#signup" class="to_register"> Create Account </a>
						</p>

						<div class="clearfix"></div>
						<br />

						<div>
							<h1> NubeOrb Internet Solutions</h1>
							<p>©<?= date('Y') ?> All Rights Reserved.</p>
						</div>
					</div>
				</form>
			</section>
		</div>

		<div id="register" class="animate form registration_form">
			<section class="login_content">
				<form method="post" action="users/add" >
					<h1>Create Account</h1>
					<div>
						<input type="text" class="form-control" name="name" placeholder="Name" required="" />
					</div>
					<div>
						<input type="email" class="form-control" name="email" placeholder="Email" required="" />
					</div>
					<div>
						<input type="password" class="form-control" name="password" placeholder="Password" required="" />
					</div>
<!-- <div>
<input type="password" class="form-control" placeholder="Confirm Password" required="" />
</div> -->
<div class="pull-right" >
	<button class="btn btn-primary submit">Submit</button>
</div>

<div class="clearfix"></div>

<div class="separator">
	<p class="change_link">Already a member ?
		<a href="#signin" class="to_register"> Log in </a>
	</p>

	<div class="clearfix"></div>
	<br />

	<div>
		<h1> NubeOrb Internet Solutions</h1>
		<p>©<?= date('Y') ?> All Rights Reserved.</p>
	</div>
</div>
</form>
</section>
</div>
</div>
</div>