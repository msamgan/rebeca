<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<h4><?= $this->Flash->render() ?></h4>
		<div class="page-title">
			<div class="title_left">
				<h3>Users <small>All the registered users in system </small></h3>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Users Information</h2>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<p class="text-muted font-13 m-b-30">
							This table shows list of all the registered users in system. They are sorted on the besis of last registered shown first (default). 
						</p>
						<table id="datatable-buttons" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Serial no.</th>
									<th>Action</th>
									<th>Name</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($users)) { $count = 1; foreach ($users as $value) { if ($value->id == $inUser['id']) { continue; }?>
								<tr>
									<td><?= $count ?></td>
									<td>
										<button class="btn btn-sm btn-danger" onclick="delete_user(<?= $value->id ?>)" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
										<a class="btn btn-info btn-sm" href="/admin/users/edit/<?= $value->id ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
									</td>
									<td><?= $value->name ?></td>
									<td><?= $value->email ?></td>
								</tr>
								<?php $count++; } } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->
<script type="text/javascript">
	function delete_user(user_id) {
		if (!confirm('Are you sure you want to delete this user ?')) {
			return false;
		}

		$.ajax({
          url: "/admin/users/delete/"+user_id,
          success: function(data){
            window.location.reload(true);
          }
        });
	}
</script>

