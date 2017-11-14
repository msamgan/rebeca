<!-- top navigation -->
<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>
			<ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="/img/img.jpg" alt=""><?= $inUser['name'] ?>
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a href="/profile"> <i class="fa fa-user pull-right"></i>Profile</a></li>
						<?php if ($inUser['role'] == 'admin') { ?>
							<li><a href="/admin/settings"> <i class="fa fa-cog pull-right"></i>Settings</a></li>
						<?php } else { ?>
							<li><a href="/settings"> <i class="fa fa-cog pull-right"></i>Settings</a></li>
						<?php } ?>
						<li><a href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
<!-- /top navigation -->