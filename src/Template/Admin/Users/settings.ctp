<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<h4><?= $this->Flash->render() ?></h4>
		<div class="page-title">
			<div class="title_left">
				<h3>Settings</h3>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Change Password</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form id="user-change-password" data-parsley-validate class="form-horizontal form-label-left" method="post" action="/admin/users/changePassword" >
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="password" >New Password <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="password" id="password" required="required" class="form-control col-md-7 col-xs-12" name="password">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="confirm-password">Confirm Password <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="password" id="confirm-password" required="required" class="form-control col-md-7 col-xs-12" name="confirm_password" >
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button class="btn btn-primary" type="button" onclick="visit_last_url();">Cancel</button>
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->
<script type="text/javascript">
	function visit_last_url() {
		window.location.href = document.referrer; 
	}
</script>