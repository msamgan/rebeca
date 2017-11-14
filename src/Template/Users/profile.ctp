<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>My Profile</h3>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2><?= $user->name ?> Profile<small>( Fields with * are mendetory to fill )</small></h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<br />
						<form id="user-edit" data-parsley-validate class="form-horizontal form-label-left" method="post">
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name" >Name <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="name" required="required" class="form-control col-md-7 col-xs-12" value="<?= $user->name ?>" name="name" >
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="email" id="email" required="required" readonly="" class="form-control col-md-7 col-xs-12" value="<?= $user->email ?>" name="email" >
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<button class="btn btn-primary" type="button" onclick="visit_last_url();">Cancel</button>
									<button class="btn btn-primary" type="reset" >Reset</button>
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